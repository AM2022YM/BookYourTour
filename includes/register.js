function verify(){
    var num;
    num = Number(document.getElementById("mywt").value);
    if(num<7000000000){
        alert("Invalid number, Please enter right number");
    }
    else if(num>9999999999){
        alert("Invalid number, Please enter right number");
    }
}