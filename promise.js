const promise = new Promise((resolve, reject)=>{
    resolve('Fulfilled');
    reject('Error');
});

promise.then((data)=>{
    console.log(data);
}, (error)=>{
    console.log('Some error occurred ' + error);
});


console.log('Chaining promises');

new Promise((resolve, reject) => {
    setTimeout(()=>resolve(1), 1000);
}).then(result=>{
    console.log(result);
    return result * 2;
}).then(result => {
    console.log(result);
    return result * 2;
}).then(result=> {
    console.log(result);
    return result * 2;
}).then(result=>console.log(result));
