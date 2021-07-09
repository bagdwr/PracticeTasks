function showBlock(k){
     let divka=document.getElementById('noneBlock'+k);
     if (divka.getAttribute('class')=='noneBlock') {
     	 divka.setAttribute('class','showBlock');
           document.getElementById('arrow'+k).style.transform="rotate(180deg)";   
           document.getElementById('BorderArrow'+k).style.transform="rotate(180deg)";
     	}else {
     		 divka.setAttribute('class','noneBlock');
                document.getElementById('arrow'+k).style.transform="rotate(0deg)";  
                document.getElementById('BorderArrow'+k).style.transform="rotate(0deg)"; 
     	}
     console.log(arrow);
}
