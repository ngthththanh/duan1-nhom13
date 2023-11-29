function tang(x){
    var cha=x.parentElement;
    var soluongcu=cha.children[1];
    var soluongmoi=parseInt(soluongcu.innerText)+1;
    soluongcu.innerText=soluongmoi;

    // alert(soluongcu);
    //gọi tới hàm cập nhật session
    var vitri=cha.children[3];
    
}
function giam(x){
    var cha=x.parentElement;
    var soluongcu=cha.children[1];
    if(parseInt(soluongcu.innerText)>1){
        var soluongmoi=parseInt(soluongcu.innerText)-1;
        soluongcu.innerText=soluongmoi;
    }else{
    alert("Đặt hàng tối thiểu là 1");
    }
    
   

    // alert(soluongcu);
    //gọi tới hàm cập nhật session

}