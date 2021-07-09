let btn=document.getElementsByClassName('program-title-wrap');
for(let i=0; i<btn.length; i++){
	btn[i].addEventListener('click',function(){
        let cont=this.nextElementSibling;
        if (cont.getAttribute('class')=='program-tabs') {
        	  if (cont.style.maxHeight) {
                cont.style.maxHeight=null;
           }else{
             	cont.style.maxHeight=450+'px';
           }
        }
      
	});
}