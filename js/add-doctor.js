window.onload = function () {
    //form submit
    $('#addDoctorForm').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let name = document.getElementById("doctorName").value;
        let channellingHospital = document.getElementById("doctorChannellingPlace").value;
        let channelingCategory = document.getElementById("channellingCategory").value;
        let availableTime = document.getElementById("availableTime").value;
        let availableDay = document.getElementById("availableDay").value;
        let professionalQualification = document.getElementById("doctorProfessionalQualification").value;
        let contactNumber = document.getElementById("doctorContactNumber").value;

        //checking entered passwords match

        doctor_details_submit(name, channellingHospital, channelingCategory, availableTime, availableDay,professionalQualification,contactNumber);
            

    });

    async function doctor_details_submit(name, channellingHospital, channelingCategory, availableTime, availableDay,professionalQualification,contactNumber) {

        let user = {
            name: name,
            channellingHospital: channellingHospital,
            channelingCategory: channelingCategory,
            availableTime: availableTime,
            availableDay: availableDay,
            professionalQualification: professionalQualification,
            contactNumber:contactNumber
        };

        let response = await fetch('../service/add-doctor-submit.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(user)
        });

        let result = await response.json();
        console.log(result);

        if (result === "success"){
            console.log(result);
            alert("Doctor is been successfully registered");
            window.location.replace("add-doctor.php");
        }
    }


    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });

};

