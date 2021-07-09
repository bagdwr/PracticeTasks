let texts=['Байтерекский район','Уральск','Таскалинский район','Акжайикский район','Теректинский район','Бурлинский район','Сырымский район','Чингирлауский район','Каратобинский район','Жангалинский район','Бокейординский район','Казталовский район','Жанибекский район'];
let links=document.getElementsByClassName('bagdwr');
for(let i=0; i<links.length; i++){
	links[i].onmouseover=function(){
		region.setAttribute('class','regionShow');
		regionP.textContent=texts[i];
	}
	links[i].onmouseout=function(){
		regionP.textContent="";
		region.setAttribute('class','regionNone');
	}
}