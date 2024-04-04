document.getElementById("whatsappForm").addEventListener("submit", function (event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    
    var Date1 = document.getElementById("date").value;
    var Time1 = document.getElementById("time").value;
    var service = document.getElementById("service").value;
   
    var contact = '+971503095343'; // add your number ex(+9100000000)
    

    var encodedMessage = encodeURIComponent(
        "Name: " + name + "\n" +
        "Email: " + email + "\n" +
        "Phone: " + phone + "\n" +
        
        "Date: " + Date1 + "\n" +
        "Time: " +Time1 + "\n" +
        "Service: " + service 
        

    );

    var link;
    

    // Check if user is on a mobile device
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        link = `whatsapp://send?phone=${contact}&text=${encodedMessage}`;
        
    } else { // Desktop device
        link = `https://web.whatsapp.com/send?phone=${contact}&text=${encodedMessage}`;
        
    }

    window.open(link, '_blank');
    
});