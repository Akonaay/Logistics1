
// List Reviews
const reviewList = document.getElementById('reviewsList');

async function getData() {
    const url = "http://127.0.0.1:8000/api/reviews";
 
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`);
    }

      let results = await response.json();
      let rList = results.data.data;
      console.log(rList)
      
      rList.map((v, k) => {
          const div = document.createElement('div');
          const card = document.createElement('div');
          const name = document.createElement('h4');
          const desc = document.createElement('p');
          const rate = document.createElement('span');
          
          div.classList = 'col-md-4'
          card.classList = 'card p-4 border rounder mb-3 text-center fancy-border'
          name.classList = 'mb-3'
          rate.classList = 'mb-3'

          name.innerText = `${v.name}`
          desc.innerText = `${v.description}`
          rate.innerText = `Rates ${v.rate}`
          
          div.appendChild(card)
          card.appendChild(name)
          card.appendChild(rate)
          card.appendChild(desc)
          reviewList.appendChild(div)
      });
    
  } catch (error) {
    console.error(error.message);
  }
}

getData();
