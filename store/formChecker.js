function verify() {
    var aloeNum = document.getElementsByName("aloeQuantity").value;
    var tomatoNum = document.getElementsByName("tomatoQuantity").value;
    var geraniumNum = document.getElementsByName("geraniumQuantity").value;
    var shipping = document.getElementsByName("ship").value;
    var username = document.getElementById("un").value;
    var password = document.getElementById("pw").value;

    var selectItems = false;
    var checkUser = false;
    var checkPassword = false;

    if(aloeNum == "" || tomatoNum == "" || geraniumNum == "" || aloeNum < 0 || tomatoNum < 0 || geraniumNum < 0)
    {
        alert("Please select a quantity for all items.");
        selectItems = false;
    }
    else
    {
        selectItems = true;
    }

    if(validate(username))
    {
        checkUser = true;
    }
    else
    {
        alert("Invalid email.")
        checkUser = false;
    }

    if(password == "")
    {
        alert("Please input your password.");
        checkPassword = false;
    }
    else
    {
        checkPassword = true;
    }

  
    if(selectItems && checkUser && checkPassword)
    {
        return(true);
    }
    else
    {
        return(false);
    }
}


function validate(Username)
{
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(Username)
}
