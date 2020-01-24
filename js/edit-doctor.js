window.onload = function () {
    //form submit
    $('#addDoctorForm').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let id = document.getElementById("doctorId").value;
        let name = document.getElementById("doctorName").value;
        let channellingHospital = document.getElementById("doctorChannellingPlace").value;
        let channelingCategory = document.getElementById("channellingCategory").value;
        let availableTime = document.getElementById("availableTime").value;
        let availableDay = document.getElementById("availableDay").value;
        let professionalQualification = document.getElementById("doctorProfessionalQualification").value;
        let contactNumber = document.getElementById("doctorContactNumber").value;

        //submiting the enterd values of doctor
        doctor_details_submit(id, name, channellingHospital, channelingCategory, availableTime, availableDay,professionalQualification,contactNumber);


    });

    //function caling the edit-doctor-details.php
    async function doctor_details_submit(id,name, channellingHospital, channelingCategory, availableTime, availableDay,professionalQualification,contactNumber) {

        //initilizing the javascript array
        let user = {
            id:id,
            name: name,
            channellingHospital: channellingHospital,
            channelingCategory: channelingCategory,
            availableTime: availableTime,
            availableDay: availableDay,
            professionalQualification: professionalQualification,
            contactNumber:contactNumber
        };

        //fetch request
        let response = await fetch('../service/edit-doctor-details.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(user)
        });

        //response
        let result = await response.json();
        console.log(result);

        //checking the success status
        if (result === "Success"){
            console.log(result);
            alert("Doctor is been successfully updated");
            window.location.replace("manage-doctor.php");
        }
    }


    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });

};

