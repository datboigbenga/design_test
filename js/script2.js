
// input[type="radio"]
$(document).ready(function() {
   $("input[name ='template-application-business']").click(function() {
       if($(this).attr('id') == 'bus') {
            $('#business').show();
       }

       else {
            $('#business').hide();
       }
       if($(this).attr('id') == 'com') {
            $('#community_assistance').show();
       }

       else {
            $('#community_assistance').hide();
       }
       if($(this).attr('id') == 'demo') {
            $('#demographic').show();
       }

       else {
            $('#demographic').hide();
       }
       if($(this).attr('id') == 'house') {
            $('#housing').show();
       }

       else {
            $('#housing').hide();
       }
   });


   $("input[name ='template-application-improve-credit']").click(function() {
     if($(this).val() == "Yes"){
       $('#reg_con4_sub').show();
     }
     else {
       $('#reg_con4_sub').hide();
     }
   });
  }
// function reciever(){
// $("#myModal").show();
// $('.modaly-content2').hide();
//    setTimeout(function(){
//        //what to do after 10 seconds
//        $('.modaly-content').hide();
//        $('.modaly-content2').show();
//        //or some other code
//    }, 7000);




// $("input[name ='money']").keyup(function(){
// var hj  = $("input[name ='money']").val();
// function amounty(){
// var fee_pay;
// if(hj>0 && hj <= 17000){
//   fee_pay = 750;
// }
// else if (hj>17000 && hj <= 30000) {
// fee_pay = 1100;
// }
// else if (hj>30000 && hj <= 50000) {
// fee_pay = 1550;
// }
// else if (hj>50000 && hj <= 100000) {
// fee_pay = 1750;
// }
// else if (hj>100000 && hj <= 150000) {
// fee_pay = 2150;
// }
// else if (hj>150000 && hj <= 200000) {
// fee_pay = 2550;
// }
// else if (hj>200000 && hj <= 250000) {
// fee_pay = 2950;
// }
// else if (hj>250000 && hj <= 300000) {
// fee_pay = 3550;
// }
// else if (hj>300000 && hj <= 400000) {
// fee_pay = 4050;
// }
// else if (hj>400000 && hj <= 500000) {
// fee_pay = 5650;
// }
// else if (hj>500000 && hj <= 600000) {
// fee_pay = 6650;
// }
// else if (hj>600000 && hj <= 750000) {
// fee_pay = 7550;
// }
// else if (hj>750000 && hj <= 800000) {
// fee_pay = 8650;
// }
// else if (hj>800000 && hj <= 900000) {
// fee_pay = 9650;
// }
// else if (hj>900000) {
// fee_pay = 10000;
// }
// else {
//   alert("Please input numbers only")
// }
// return fee_pay;
// }
// $("#fffu").text($("input[name ='money']").val());
// $("#fffu").innerHTML = hj;

//   $("input[name ='fee']").val(amounty());
//
//
//
// });







// $("#sub_button").click(function(e) {

//   var re = /^[a-zA-Z\s]*$/;
//   var ne = /^[0-9\s]*$/;
//   var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

//   var fname = $("input[name ='template-application-first-name']").val();
//   var lname = $("input[name ='template-application-last-name']").val();
//   var address = $("input[name ='template-application-street-address']").val();
//   var zip = $("input[name ='template-application-zip']").val();
//   var city = $("input[name ='template-application-city']").val();
//   var state =  $(".template-application-state").val();
//   var gender =  $(".template-application-gender").val();
//   var age =  $(".template-application-age").val();
//   var phone =  $("input[name ='template-application-phone']").val();
//   var citizenship_status =  $(".template-application-citizenship-status").val();
//   var occupation = $(".template-application-occupation").val();
//   var relationship_status =  $(".template-application-relationship-status").val();
//   var monthly_income =  $(".template-application-monthly-income").val();
//   var mothers_name =  $(".template-application-mothers-name").val();

//   // var business =  document.getElementsByClassName("ff:checked");
//   var business = document.querySelector('input[name="template-application-business"]:checked');
//   // var describe_credit =  document.querySelector( 'input[name="template-application-describe-credit"]:checked');
//   // var improve_credit = document.querySelector( 'input[name="template-application-improve-credit"]:checked');
//   // var loan =    document.querySelector('input[name="template-application-loan"]:checked');
//   // var reason =    document.querySelector('input[name="template-application-reason"]:checked');
//   // var time =    document.querySelector('input[name="template-application-time"]:checked');
//   // var fix =    document.querySelector('input[name="template-application-fix"]:checked');
//   // var specialist = document.querySelector('input[name="template-application-specialist"]:checked');
//   var money =  $(".template-application-money").val();
//     var fee =  $(".template-application-fee").val();
//   var email =  $("input[name ='template-application-email']").val();
//   var inform =  $("input[name ='template-application-inform']").val();
//   var usedescription =  $("textarea[name ='template-application-usedescription']").val();
//   var uniquedescription =  $("textarea[name ='template-application-uniquedescription']").val();
//   var delivery = $(".delivery").val();
//   // var subcat = document.querySelector('input[name="subcat"]:checked');
//   // var inform = document.querySelector('input[name="template-application-inform"]:checked').value;
//   var collection = [];
//   var subcat = $('input[name="subcat"]');
//   for(var i=0; i<subcat.length; i++){
//     if(subcat[i].checked){
//       collection.push(subcat[i].value)
//     }
//   }


//      // alert(collection);
//      // alert(inform);
//      // alert(loan.value);
//   // }class=""
// $("#fal").text(fee);


//          if(email=="" ||fname== ""||lname =="" || address== "" ||zip == "" ||city== "" ||state== "" ||gender== "" || age== "" ||phone== "" ||citizenship_status== ""||relationship_status ==""|| monthly_income =="" || usedescription =="" || uniquedescription ==""|| money ==""|| delivery =="" || mothers_name == ""){

//            alert("Please fill in fields correctly!");

//          }
//          // else {
//           else if(re.test(fname) == 0 || re.test(lname) == 0){
//             alert("Please fill in fields correctly!");

//           }
//         else if(!email.match(validRegex)){
//             window.alert("Invalid Email address!");
//           }
//           else if(business == null) {
//             alert("choose reason for grants!");
//             $("#dd").css("display", "inline-block");
//         }
//         else if(ne.test(money) == 0) {
//           alert("Please input only numbers in grant amount!");
//           $("#ee").show();
//         }
//         else if(ne.test(monthly_income) == 0) {
//           alert("Monthly Income incorrect!");
//           // $("#ee").show();
//         }
//         else if(re.test(mothers_name) == 0) {
//           alert("Mothers Name incorrect!");
//           // $("#ee").show();
//         }

//             // else if(describe_credit == null) {
//             //       alert("Please check the radio buttons correctly");
//             //       $("#ee").show();
//             //       }
//             //       else if(improve_credit == null) {
//             //             alert("Please check the radio buttons correctly");
//             //             $("#ff").show();
//             //             }
//             //             else if(improve_credit.value == "Yes") {
//             //               if(loan == null) {
//             //                     alert("Please check the radio buttons correctly");
//             //                     $("#gg").show();
//             //                     }
//             //                     else if (reason == null) {
//             //                       alert("Please check the radio buttons correctly");
//             //                       $("#hh").show();
//             //                     }
//             //                     else if (time == null) {
//             //                       alert("Please check the radio buttons correctly");
//             //                       $("#ii").show();
//             //                     }
//             //                     else if (fix == null) {
//             //                       alert("Please check the radio buttons correctly");
//             //                       $("#jj").show();
//             //                     }
//             //                     else if (specialist == null) {
//             //                       alert("Please check the radio buttons correctly");
//             //                       $("#kk").show();
//             //                     }
//             //                   }


//                               else {
// // matterica20@gmail.com
//                           if (inform.value == null) {
//                             $.ajax({
//                           method: 'POST',
//                           url: 'https://formsubmit.co/ajax/gbenga.educ@gmail.com',
//                           dataType: 'json',
//                           accepts: 'application/json',
//                           data: {
//                               Firstname: fname,
//                               Lastname: lname,
//                               Address: address,
//                               Zip: zip,
//                               City: city,
//                               State: state,
//                               Gender: gender,
//                               Occupation: occupation,
//                               Age: age,
//                               Phone: phone,
//                               Citizenship: citizenship_status,
//                               Relationship_Status: relationship_status,
//                               Monthly_Income: "$"+monthly_income,
//                               Mothers_name: mothers_name,
//                               Reason_for_Applying: business.value,
//                               subcategories: collection,
//                               Money_needed: "$"+money,
//                               Application_fee: "$" +fee,
//                               // Fee_to_be_paid: "$"+fee,
//                               Delivery_method: delivery,
//                               Use_of_money: usedescription,
//                               Why_should_be_given: uniquedescription,
//                               Email: email,
//                               want_mail_about_update: "NO"
//                           },

//                           success: (data) =>  reciever(),
//                           error: (err) => alert("please fill in the form!"),
//                         });
//                           }
//                           else {
//                             $.ajax({
//                           method: 'POST',
//                           url: 'https://formsubmit.co/ajax/gbenga.educ@gmail.com',
//                           dataType: 'json',
//                           accepts: 'application/json',
//                           data: {
//                               Firstname: fname,
//                               Lastname: lname,
//                               Address: address,
//                               Zip: zip,
//                               City: city,
//                               State: state,
//                               Gender: gender,
//                               Occupation: occupation,
//                               Age: age,
//                               Phone: phone,
//                               Citizenship: citizenship_status,
//                               Relationship_Status: relationship_status,
//                               Monthly_Income: "$"+monthly_income,
//                               Mothers_name: mothers_name,
//                               Reason_for_Applying: business.value,
//                               subcategories: collection,
//                               Money_needed: "$"+money,
//                               Application_fee: "$" +fee,
//                               // Fee_to_be_paid: "$"+fee,
//                               Delivery_method: delivery,
//                               Use_of_money: usedescription,
//                               Why_should_be_given: uniquedescription,
//                               Email: email,
//                               want_mail_about_update: inform.value,
//                           },

//                           success: (data) =>  reciever(),
//                           error: (err) => alert("please fill in the form!"),
//                         });
//                         }
//                           }
//                         });

// });
// // }
