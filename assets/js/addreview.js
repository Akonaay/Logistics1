const thisForm = document.getElementById('myForm');
thisForm.addEventListener('submit', async function (e) {
    e.preventDefault();
    
    const formData = new FormData(thisForm);

    try {
        const response = await fetch("http://127.0.0.1:8000/api/reviews", {
        method: "POST",
        // Set the FormData instance as the request body
        body: formData,
    });
        // console.log(await response.json());
        let results = await response.json();
        // console.log(results.msg)
        window.alert(results.msg);
        window.location.href = '/';
    } catch (e) {
        console.error(e);
    }
});
