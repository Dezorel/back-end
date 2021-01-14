async function getPosts(){
    //let res = await fetch('https://jsonplaceholder.typicode.com/posts')     //показываю откуда  получаю данные
    let res = await fetch('http://localhost/back-end/API_test/posts')     //показываю откуда  получаю данные
    let posts = await res.json()        //получаю данные в json
    console.log(posts)


//циклом форыч выводим список постов в карточки
    posts.forEach((item)=> {
        document.querySelector('.row-cols-md-3').innerHTML += `        
        <div class="card mt-4 ml-4 "  style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.post}</p>
                <a href="#" class="btn btn-primary">Манящая кнопка</a>
            </div>
        </div>`
    })
};
getPosts();