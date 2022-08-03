window.addEventListener("DOMContentLoaded",function(){
    const forms=document.querySelectorAll(".form-delete")
console.log("ciao");


    for (const form of forms) {
        form.addEventListener("submit",function(e){
          e.preventDefault();

        const result=confirm("Sei sicuro di voler eliminare il fumetto?");
        if(result){
            form.submit();
        }  
        })
        
    }
    

})