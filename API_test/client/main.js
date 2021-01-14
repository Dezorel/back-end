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
                <div class="d-flex justify-content-end">
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
    }
}



getPosts();