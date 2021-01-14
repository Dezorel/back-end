async function getPosts(){
    let res = await fetch('https://jsonplaceholder.typicode.com/posts')     //показываю откуда  получаю данные
    let posts = await res.json()        //получаю данные в json
    console.log(posts)
}
getPosts()