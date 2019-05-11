function DEXPayments(email) {
    let amount = parseFloat($('#grand-total').text());
    // let paystackamount = amount * 100;
    // console.log(paystackamount);
    
    // var handler = PaystackPop.setup({
    //     key: 'pk_test_58eaf445cbeaf5de12b1290ced3f1f2a142d266e',
    //     email: email,
    //     // amount: amount,
    //     amount: paystackamount,
    //     currency: "EUR",
    //     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    //     callback: function(response){
    //         // alert('success. transaction ref is ' + response.reference);
    //         window.location.href= '/payments/success';
    //     },
    //     onClose: function(){
    //         alert('window closed');
    //     }
    // });
    // handler.openIframe();
    
    const API_publicKey = "FLWPUBK_TEST-364eaaff94700a6330b4cf1582410674-X";
    
    var x = getpaidSetup({
        PBFPubKey: API_publicKey,
        customer_email: email, //email,
        amount: amount,
        currency: "NGN",
        country: "NG",
        payment_options: "card",
        txref: "<?=uniqid(rand(0,1000)); ?>",
        custom_title: 'Farm Fresh LTD',
        
        onclose: function() {
        },
        callback: function(response) {
            var txref = response.tx.txRef;
            console.log("This is the response returned after a charge", response);
            
            window.location.href= '/payments/success';
            
            x.close(); // use this to close the modal immediately after payment.
        }
    });
}