async function fetchData(){
        const url = 'https://coinranking1.p.rapidapi.com/coins?referenceCurrencyUuid=yhjMzLPhuIDl&timePeriod=24h&tiers%5B0%5D=1&orderBy=marketCap&orderDirection=desc&limit=50&offset=0';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '5b821daa6emshcd6f816e1ce2fd2p1071dbjsn4675ee2a2826',
            'X-RapidAPI-Host': 'coinranking1.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const result = await response.text();
        displayData(result);
    } catch (error) {
        console.error(error);
    }
}
fetchData();



function displayData(result){
    const section = document.querySelector('section')


     cryptoList = JSON.parse(result).data.coins;
    console.log(cryptoList);
    
    cryptoList.forEach(coin => {
        
        const coinDiv = document.createElement('div');
        coinDiv.classList.add('coinEl');
    
        
        let name = coin.name;
        let iconUrl = coin.iconUrl;
        let price = coin.price;
        let rank = coin.rank;
        let change = coin.change;
        
        
    
        //<img src="${iconUrl}" alt="${name}" />
        coinDiv.innerHTML = `  
            <div>
                <img src="${iconUrl}" alt="${name}" />
                <span>${name}</span>
            </div>
          
          <p>${Math.round(price*100)/100}</p>
          <p>${Math.round(rank*100)/100}</p>
          <p class="change">${Math.round(change*100)/100}</p>
          
        `;
        

        
        
        section.appendChild(coinDiv);
      });
      const changeEl = document.querySelectorAll(".change")
      

changeEl.forEach(element => {
  const value = parseFloat(element.textContent); 

  if (value < 0) {
    element.classList.add("red"); 
    element.classList.remove("green"); 
  } else {
    element.classList.add("green"); 
    element.classList.remove("red"); 
  }
});

}