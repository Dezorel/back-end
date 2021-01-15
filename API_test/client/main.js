let globalID = null
const link = 'http://localhost/back-end/API_test/posts'     //показываю откуда  получаю данные
async function getPosts(){
    //let res = await fetch('https://jsonplaceholder.typicode.com/posts')     //показываю откуда  получаю данные
    let res = await fetch(link)
    let posts = await res.json()        //получаю данные в json
    console.log(posts)

    document.querySelector('.row-cols-md-3').innerHTML ='';

//циклом форыч выводим список постов в карточки
    posts.forEach((item)=> {


        document.querySelector('.row-cols-md-3').innerHTML += `        
        <div class="card mt-4 ml-4 "  style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.post}</p>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-danger" onclick="removePost(${item.id_post})">Удалить</button>
                <button class="btn btn-warning" onclick="selectPost('${item.id_post}', '${item.author}', '${item.title}', 
                '${item.post}')">Редактировать</button>
                    ${item.author} 
                </div>
            </div>
        </div>`
    })
};

async function addPost(){
    const title = document.getElementById('title').value        //получаем данные из полей
    const author = document.getElementById('author').value      //получаем данные из полей
    const post = document.getElementById('post').value          //получаем данные из полей

    let formData = new FormData();      //иммитация формы
    formData.append('title', title)
    formData.append('author', author)
    formData.append('post', post)

    //создаём запрос на апи
    const res = await fetch(link,{
        method: 'POST',          //указываем параметр который будет использоваться, по умолчанию - GET
        body: formData
    })

    const data = await res.json()
    if(data.status === true){
        await getPosts()
        document.getElementById('title').value = ''
        document.getElementById('author').value = ''
        document.getElementById('post').value = ''
    }
}

async function removePost(id){
    const res = await fetch(`http://localhost/back-end/API_test/posts/${id}`,{
        method: "DELETE"
    })
    const data = await res.json()
    if(data.status === true){
         await getPosts()
     }
}

function selectPost(id, author, title, post){
    globalID = id;
    document.getElementById('edit-title').value = title
    document.getElementById('edit-author').value = author
    document.getElementById('edit-post').value = post
}

async function updatePost(){
    const title = document.getElementById('edit-title').value;
    const author = document.getElementById('edit-author').value;
    const post = document.getElementById('edit-post').value;

    const data = {
        title: title,
        author: author,
        post: post
    }

    const res = await fetch(`http://localhost/back-end/API_test/posts/${globalID}`, {
        method: "PATCH",
        body: JSON.stringify(data)
    })

    let resData = await res.json()
    console.log(resData)
    if (resData.status === true){
        await getPosts()
        document.getElementById('edit-title').value = ''
        document.getElementById('edit-author').value = ''
        document.getElementById('edit-post').value = ''
    }
}




getPosts();