$(document).ready(function() {
    var states = ['Andhra Pradesh','Arunachal Pradesh','Assam','Bihar',
    'Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh',
    'Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Madhya Pradesh',
    'Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland',
    'Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu',
    'Telangana','Tripura','Uttar Pradesh','Uttarakhand','West Bengal'];

    states['Gujarat'] = ['Ahmedabad','Amreli','Anand','Banas Kantha','Bharuch','Bhavnagar',
    'Dohad (Dahod)','Gandhinagar','Jamnagar','Junagadh','Kachchh','Kheda','Mahesana (Mehsana)','Narmada'
    ,'Navsari','Panch Mahals (Panchmahal)','Patan','Porbandar','Rajkot','Sabar Kantha','Surat','Surendranagar','Tapi','The Dangs','Vadodara','Valsad'];
    for (var i = 0; i < states.length; i++) {
        $("#state").append('<option>'+ states[i] +'</option>');
    };
    $("#state").change(function() {
        var state = $("#state").val();
        var length = states[state].length;
        for (var i = 0; i < length; i++) {
            $("#city").append('<option>'+ states[state][i] +'</option>');
        };
    });

    $("#singleroom").change(function() {
        if($('#singleroom').is(':checked')) {
            $("#single_value").show();
        }
        else {
            $("#single_value").hide();
        }
    });
    $("#doubleroom").change(function() {
        if($('#doubleroom').is(':checked')) {
            $("#double_value").show();
        }
        else {
            $("#double_value").hide();
        }
    });
    $("#familyroom").change(function() {
        if($('#familyroom').is(':checked')) {
            $("#family_value").show();
        }
        else {
            $("#family_value").hide();
        }
    });
});