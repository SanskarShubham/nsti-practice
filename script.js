// // document.getElementById("myForm").addEventListener("submit", function (event) {
// //     event.preventDefault();

// //     //get values
// //     const input = document.getElementById("input").value;


// //     // retrieve existing data
// //     let existingData = localStorage.getItem("inputs");


// //     // If there's no data, initialize an empty array
// //     if (existingData === null) {
// //         existingData = [];
// //     } else {
// //         // Parse the existing data if it's already an array
// //         existingData = JSON.parse(existingData);
// //     }

// //     // Append the new input to the array
// //     existingData.push(input);



// //     // store data
// //     localStorage.setItem("inputs", JSON.stringify(existingData));

// //     // alert
// //     location.reload();




// // }); 


// // document.addEventListener("DOMContentLoaded", function () {
// //     // Retrieve existing data from local storage
// //     const existingData = localStorage.getItem("inputs");

// //     if (existingData) {
// //         // Parse the existing data if it's already an array
// //         const parsedData = JSON.parse(existingData);

// //         // Display the data in the HTML
// //         const dataElement = document.getElementById("todo");
// //         parsedData.forEach(function(element) {
// //             const pTag = document.createElement("p");

// //             const buttonTag = document.createElement("button");
// //             buttonTag.textContent = "Delete";
// //             buttonTag.addEventListener("click", function() {
// //                 // find the index of the element in the parsedData array
// //                 const index = parsedData.indexOf(element);

// //                 // if the element is found in the array, remove it
// //                 if (index !== -1) {
// //                     parsedData.splice(index, 1);

// //                     // update the local storage by setting the new array
// //                     localStorage.setItem("inputs", JSON.stringify(parsedData));

// //                     // remove the p tag from the DOM
// //                     dataElement.removeChild(pTag);
// //                 }
// //             });

// //             const editBtn = document.createElement("button");
// //             editBtn.textContent= "edit";
// //             editBtn.addEventListener("click", function(){
// //         // find the index of the element in the parsedData array
// //         const index = parsedData.indexOf(element);

// //         // if the element is found in the array, edit it
// //         if (index !== -1) {
// //             // update the element
// //             parsedData[index]=input.value;

// //                 // update parsed data
// //                 parsedData.textContent=input.value;


// //                     // update the local storage by setting the new array
// //                     localStorage.setItem("inputs", JSON.stringify(parsedData));


// //                     // remove the p tag from the DOM
// //                     dataElement.removeChild(pTag);
// //                 }


// //             })

// //             pTag.textContent = element;
// //             pTag.appendChild(buttonTag);
// //             pTag.appendChild(editBtn);
// //             dataElement.appendChild(pTag);
// //         });
// //     }
// // });
























// document.getElementById("myForm").addEventListener("submit", function (event) {
//     // event.preventDefault();

//     // Get the value from the input field
//     const input = document.getElementById("input").value;

//     // get date
//     const date = document.getElementById("date").value;

//     // Retrieve existing data from local storage
//     let existingData = localStorage.getItem("inputs");

//     // If no data, initialize an empty array
//     if (existingData === null) {
//         existingData = [];
//     } else {
//         // Parse existing data if it's already an array
//         existingData = JSON.parse(existingData);
//     }

//     // Append the new input to the array
//     existingData.push(input + " " + date);

//     // Store the updated data in localStorage
//     localStorage.setItem("inputs", JSON.stringify(existingData));

//     // Clear the input field after submission
//     document.getElementById("input").value = '';

//     // Clear the date field after submission
//     document.getElementById("date").value = '';

//     // Display the updated list (no page reload needed)
//     displayData();
// });

// document.addEventListener("DOMContentLoaded", function () {
//     // Display the data when the page is loaded
//     displayData();
// });

// // Function to display the data
// function displayData() {
//     // Retrieve existing data from local storage
//     const existingData = localStorage.getItem("inputs");

//     // Check if there's any existing data
//     if (existingData) {
//         // Parse the data if it's already an array
//         const parsedData = JSON.parse(existingData);

//         // Select the element where data will be displayed
//         const dataElement = document.getElementById("todo");

//         // Clear previous content before displaying updated list
//         dataElement.innerHTML = '';

//         parsedData.forEach(function (element, index) {
//             const pTag = document.createElement("p");

//             // Create delete button
//             const buttonTag = document.createElement("button");
//             buttonTag.textContent = "Delete";
//             buttonTag.addEventListener("click", function () {
//                 // Remove the element from the array and update localStorage
//                 parsedData.splice(index, 1);
//                 localStorage.setItem("inputs", JSON.stringify(parsedData));

//                 // Remove the <p> tag from the DOM
//                 dataElement.removeChild(pTag);
//             });

//             // Create edit button
//             const editBtn = document.createElement("button");
//             editBtn.textContent = "Edit";
//             editBtn.addEventListener("click", function () {

//                 // Create an input field with the current value
//                 const inputField = document.createElement("input");
//                 inputField.type = "text";
//                 inputField.value = element;

//                 // Replace the <p> tag with the input field for editing
//                 pTag.textContent = ''; // Clear the text content
//                 pTag.appendChild(inputField);

//                 // Create a save button
//                 const saveBtn = document.createElement("button");
//                 saveBtn.textContent = "Save";
//                 saveBtn.addEventListener("click", function () {

//                     // Update the element in the array with the new value
//                     parsedData[index] = inputField.value;

//                     // Update the localStorage
//                     localStorage.setItem("inputs", JSON.stringify(parsedData));

//                     // Update the displayed text and buttons
//                     pTag.textContent = inputField.value;
//                     pTag.appendChild(buttonTag);
//                     pTag.appendChild(editBtn);
//                 });

//                 // Append the save button to the <p> tag
//                 pTag.appendChild(saveBtn);
//             });

//             // Set the initial text content of the <p> tag and add buttons
//             pTag.textContent = element;
//             pTag.appendChild(buttonTag);
//             pTag.appendChild(editBtn);

//             // Append the <p> tag to the parent element
//             dataElement.appendChild(pTag);
//         });
//     }
// }









