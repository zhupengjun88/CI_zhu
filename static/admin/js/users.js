function myFunction(){
    var email=$('.text').val(),
        pass1=$('.pass1').val(),
        pass2=$('.pass2').val(),
        submit=$('.submit');
    var data="";
    console.log(url);
   $.post(url,data,function(res){
       if(res.status==1){
           console.log('ok');
       }else{
           console.log('Eroor');
       }
   });
    return false;
}

// $(document).ready(function(){
//     $(".submit").click(function(){
//         console.log('Eroor');
//     })
// });