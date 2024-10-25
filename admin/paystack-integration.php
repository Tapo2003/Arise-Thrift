<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="paymentForm">
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email-address" />
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="tel" id="amount" value = "1000" required />
    </div>
    <div class="form-group">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" />
    </div>
    <div class="form-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" />
    </div>
    <div class="form-submit">
        <button type="submit" onclick="payWithPaystack()"> Pay </button>
    </div>
    </form>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src = "jquery.js"></script>
<script>
    
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
    
    e.preventDefault();
    
    let handler = PaystackPop.setup({
        key: 'pk_test_744750e74c144f86d05b803167d08f81c13c6085', // Replace with your public key
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100,
        // amount: 80000 * 100,
        firstname : document.getElementById("first-name").value,
        lastname : document.getElementById("last-name").value,
        ref: 'VS'+Math.floor((Math.random() * 1000000000) + 1),
        
         // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
        // window.location = "index.php";
        alert('Transaction cancelled.');
        },
        callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        alert(message);
        window.location = "http://localhost/Arise%20Thrift/admin/verify_transaction.php?reference=" + response.reference;
        }
    });
    handler.openIframe();
    }
</script>
</body>
</html>