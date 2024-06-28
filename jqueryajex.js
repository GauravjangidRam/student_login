$(document).ready(function(){

    function showdata(){
        $.ajax({
            url:"retrieve.php",
            method:"GET",
            success:function(data){
                console.log(data);
            }
        });
    }
showdata();
    $("#btn-submit").click(function(e){
        e.preventDefault();
    console.log("button click");
    let nm = $("#name").val();
    let em = $("#email").val();
    let ph = $("#phone").val();
    let pw = $("#password").val();
    // console.log(nm);
    // console.log(em);
    // console.log(ph);
    // console.log(pw);

    mydata = {name:nm, email:em, phone: ph, password:pw};
console.log(mydata);

$.ajax({
    url:"insert.php",
    method : "POST",
    data: JSON.stringify(mydata),
    success :function(data)
    {
        console.log(data);
        msg = "<div style='background-color: cadetblue; margin: 5px; padding: 10px;'>"+data+"</div>";
        $(".msg").html(msg);
        $("#userForm")[0].reset();
    },
});
});
    });