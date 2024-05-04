    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>Forms</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        </head>
        <body>
            <div class="container">
                <div class="forms-container">
                    
                    <div id="popup" class="popup">
                    <div class="popup-content">
                        <div class="form-group">
                            <label for="aiTitles">AI-Generated Titles:</label>
                            <ul id="aiTitlesList"></ul>
                        </div>
                        <center>
                            <button id="cp" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">OK</button>
                        </center>
                     </div>
                    </div>
                <div id="descriptionPopup" class="popup">
                    <div class="popup-content">
                        <div class="form-group">
                            <label for="aiDescriptions">AI-Generated Description:</label>
                            <ul id="aiDescriptionsList"></ul>
                        </div>
                        <center>
                            <button id="closePopup" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">OK</button>
                        </center>
                    </div>
                </div>
                <div id="offlinePopup" class="popupp" style="display: none;">
                    <div class="popup-contentp">
                    
                        <p>You are offline. Please check your internet connection.</p>
                        <center>
                            <button id="closePopupp" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">OK</button>
                        </center>
                    </div>
                </div>
                <div id="descriptionPopup" style="display: none;">
                    <div class="popup-content">
                    <label for="aiDescriptions">AI-Generated Descriptions:</label>
                        @if(isset($descriptionResponse))
                            @foreach($descriptionResponse as $index => $description)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $description }}" id="aiDescription{{ $index }}">
                                    <label class="form-check-label" for="aiDescription{{ $index }}">
                                        {{ $description }}
                                    </label>
                                </div>
                            @endforeach
                        @endif
                     <center><button id="closePopup" class="btn btn-primary">OK</button></center>
                     

                    </div>
                </div>
                
                
                <form id="logout-form">
                <div class="form-container">
                    <center><h2>Title</h2></center>
                {{csrf_field() }}
                <div>
                    <label>Selected Title</label>
                    <input type="text" name="atitle" placeholder="Title" id="inputTitle" value="{{$Productitem->Product_Name}} "/>
                    <div id="titleResponse"></div>
                </div>  
                <div>
                    <label>Additional Information</label>
                    <input type="hidden" id="productId" value="{{ $Productitem->id }}">
                    <input type="text" name="additional_info" placeholder="Additional Information" id="additional_info"/>
                </div>
                <div class="button-container">
                    <input type="submit" style="--clr:#1e9bff" class="optimize-ai" value="Enhance Title with AI" id="optimizeTitleButton"   title="Click Here to Generate Titles" />
                    <div id="loader" style="display: none;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                    <center><h2>Description</h2></center>
                    <div>
                <label for="inputDescription">Selected Description</label>
                <textarea class="scrollabletextbox" name="description_in" id="inputDescription" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 3px;" placeholder="Description">{{$Productitem->Product_Description}}</textarea>
            </div>

                <div>
                    <label>Additional Information</label>
                    <input type="hidden" id="productId" value="{{ $Productitem->id }}">
                    <input type="text" name="additional_infod" placeholder="Additional Information" id="additional_infod"/>
                </div>
                <div class="button-container">
                    <input type="submit"  style="--clr:#1e9bff" class="optimize-aid" value="Enhance Description with AI" id="optimizeDescriptionAI" title="Click Here to Generate Description" />
                    <div id="loader1" style="display: none;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            </div>
            <div class="forms-containerd" >
                <h1 class="customd-h1">AI Generated Data</h1>
                        <form id="aieditform" >

                            @csrf
                            <input type="hidden" name="aiTitle" value="">
                            <input type="hidden" name="aiDescription" value="">
                            
                                <div>
                                <label>Title</label>
                                <input type="hidden" id="productId" value="{{ $Productitem->id }}">
                                        <input type="text" name="atitle" placeholder="Title" required id="aiTitleInput"/><br>
                                </div>
                                <div>
                                <label>Description</label>
                                
                                        <input type="textarea" name="description" placeholder="Description" required id="aiDescriptionInput" ><br>
                                </div>
                                <div>
                                <center>
                                <input type="submit" id="aiUpdateButton" style="--clr:#1e9bff" class="optimize-aiu" value="Update" title=" Click Here To Update Title and Description In CRUD table" />
                                
                                </center>
                                </div>
                        </form>
                            
                 </div>     
            </div><br>

            <div id="hiscontainer"> <h5><center>History</center></h5>
            <div style="display: flex; justify-content: center;">
            <button id="openPopup" class="history-button">
            <i class="fas fa-history"></i> View Revision History For Title
            </button>
            <button id="openPopupd" class="history-button">
                <i class="fas fa-history"></i> View Revision History For Description
            </button>
                </div>
            <!-- Popup container -->
            <div id="historyPopup" class="popupph" style="display: none;">
                <div class="popup-contentph">
                    <div id="popupContent"></div>
                    <input type="hidden" id="productId" value="{{ $Productitem->id }}">
                    <center>
                    <button id="closePopupph" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">OK</button>

                    </center>
                </div>
            </div>

            <!-- Popup container for Description -->
            <div id="historyPopupd" class="popupph" style="display: none;">
                <div class="popup-contentphd">
                    <div id="popupContentd"></div>
                    <input type="hidden" id="productId" value="{{ $Productitem->id }}">
                    <center>
                        <button id="closePopupphd" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">OK</button>
                    </center>
                </div>
            </div>
        </div>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .custom-h1 {
                    
                    font-size: 36px;
                    font-weight: bold;
                    color:#263544;
                    text-align: center;
                    margin: 20px 0;
                    padding: 10px 0;
                    border-bottom: 2px solid #ccc;
                    transition: color 0.3s ease-in-out;
                    
                }
                .button-container {
                        display: flex; /* Display flex to make children elements aligned horizontally */
                        align-items: center; /* Align items vertically */
                        margin-bottom: 10px; /* Adjust margin as needed */
                    }

                    .button-container input[type="text"] {
                        margin-right: 10px; /* Adjust margin between input and button */
                    }


                .custom-h1:hover {
                color: #007BFF;
                cursor: pointer;
                }
                .customd-h1 {
                    
                    font-size: 28px;
                    font-weight: bold;
                    color: #333;
                    margin: 20px 0;
                    padding: 10px 0;
                    /*transition: color 0.3s ease-in-out;*/
                    position: absolute;
                    top: 20px; /* Adjust this value to control the distance between headers */
                    left: 70%;
                    transform: translateX(-40%);
                    z-index:2; 
                    
                }
                .form-container h2 {
                    font-weight: bold;
                    color: #263544;
                    border-bottom: 2px solid #ccc;
                    top: 20px;
                    transition: color 0.3s ease-in-out;
                    }
                .form-container h2:hover {
                        color: #007BFF;
                        cursor: pointer;
                    }
                .customd-h1::after {
                    content: "";
                    display: block;
                    width: 175%; /* Adjust the width as needed */
                    border-bottom: 2px solid #ccc;
                    position: absolute;
                    bottom: -1px; /* Adjust this value to control the position of the border */
                    left: -30%; /* Adjust this value to control the position of the border */
                }

                .customd-h1:hover {
                color: #007BFF;
                cursor: pointer;
                }
                label {
                    display: block;
                    margin-bottom: 2px;
                    color: #555;
                }
                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                }
                input[type="textarea"] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                    text-align: left;
                }
                input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    cursor: pointer;
                    border-radius: 5px;
                }
                input[type="submit"].optimize-ai {
                    position: relative;
                    background: #17a2b8;/*#263544;*/
                    color: #fff;
                    text-decoration: none;
                    text-transform:;
                    font-size: 1em;
                    letter-spacing: 0em;
                    font-weight: 200;
                    padding: 10px 30px;
                    transition: 0.5s;
                }
                input[type="submit"].optimize-ai:hover {
                     /*background: var(--clr) ;*/
                     letter-spacing: 0.25em;
                    /*box-shadow:0 0 35px var(--clr);*/
                    
                }
                input[type="submit"].optimize-aid {
                    position: relative;
                    background: #17a2b8;
                    color: #fff;
                    text-decoration: none;
                    text-transform:;
                    font-size: 1em;
                    letter-spacing: 0em;
                    font-weight: 200;
                    padding: 10px 30px;
                    transition: 0.5s;
                }
                input[type="submit"].optimize-aid:hover {
                    /*background: var(--clr) ;*/
                    letter-spacing: 0.25em;
                    /*box-shadow:0 0 35px var(--clr);*/
                    
                }
                input[type="submit"].optimize-aiu {
                    position: relative;
                    background: #17a2b8;
                    color: #fff;
                    text-decoration: none;
                    text-transform:;
                    font-size: 1em;
                    letter-spacing: 0em;
                    font-weight: 200;
                    padding: 10px 30px;
                    transition: 0.5s;
                }
                input[type="submit"].optimize-aiu:hover {
                     /*background: var(--clr) ;*/
                     letter-spacing: 0.25em;
                    /*box-shadow:0 0 35px var(--clr);*/
                    
                    
                }
                
                ul {
                    color: red;
                    padding: 0;
                    margin: 0;
                }

                li {
                    list-style-type: none;
                    margin-bottom: 10px;
                }

                /* Add this CSS for the container and the form */
                .container {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }

                .forms-container {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width: 50%;
                    height: 650px;
                    margin: 0 1%;
                    border-radius: 15px;
                    padding: 40px;
                    box-sizing: border-box;
                    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.15);
                    background-color: rgba(255, 255, 255, 0.95); /* Light white background */ /* Set background color to white */
                }

                .forms-containerd {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width: 48%;
                    height:650px;
                    margin: 0 1%;
                    border-radius: 15px;
                    padding: 40px;
                    box-sizing: border-box;
                    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.15); 
                    background-color: rgba(255, 255, 255, 0.95); 
                }
                .scrollabletextbox {
                    height:100px;
                    width:200px;
                    font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                    font-size: 82%;
                    overflow:auto; /* changed from overflow:scroll to auto */
                }
                .scrollabletextboxx {
                    height:100px;
                    width:520px;
                    font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                    font-size: 82%;
                    overflow:auto; /* changed from overflow:scroll to auto */
                }
                #popup {
                    position: fixed;
                top: 50%; /* Position the popup in the middle of the screen vertically */
                left: 50%; /* Position the popup in the middle of the screen horizontally */
                transform: translate(-50%, -50%); /* Center the popup */
                
                padding: 20px;
                z-index: 1000; /* Ensure the popup is above other elements */
                }

                .popup-content {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                }
                #descriptionPopup {
                position: fixed;
                top: 50%; /* Position the popup in the middle of the screen vertically */
                left: 50%; /* Position the popup in the middle of the screen horizontally */
                transform: translate(-50%, -50%); /* Center the popup */
                
                padding: 20px;
                z-index: 1000; /* Ensure the popup is above other elements */
                }
                .popup-content {
                    text-align: center;
                }
                .form-group{
                    text-align: justify;
                }
                .popup {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black overlay */
                    z-index: 9999; /* ensure popup is on top of other content */
                    justify-content: center;
                    align-items: center;
                }

                .popup-content {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                    max-width: 80%;
                }

                .popup-content ul {
                    list-style-type: none;
                    padding: 0;
                }

                .popup-content li {
                    margin-bottom: 10px;
                }

                .popup-content label {
                    margin-left: 5px;
                }

                #cp {
                    margin-top: 10px;
                }
                #aiTitlesList li {
                    display: flex; /* Use flex layout to align radio button and title in the same line */
                    align-items: center; /* Vertically center the radio button and title */
                    margin-bottom: 5px; /* Add some spacing between list items */
                }
                .descriptionPopup {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black overlay */
                    z-index: 9999; /* ensure popup is on top of other content */
                    justify-content: center;
                    align-items: center;
                }

                .popup-content {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                    max-width: 80%;
                }

                .popup-content ul {
                    list-style-type: none;
                    padding: 0;
                }

                .popup-content li {
                    margin-bottom: 10px;
                }

                .popup-content label {
                    margin-left: 5px;
                }

                #cp {
                    margin-top: 10px;
                }
                #aiDescriptionsList li {
                    display: flex; /* Use flex layout to align radio button and title in the same line */
                    align-items: center; /* Vertically center the radio button and title */
                    margin-bottom: 5px; /* Add some spacing between list items */
                }
                
                .popupp {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #fefefe;
                    border: 1px solid #888;
                    z-index: 1000;
                }

                .popup-contentp {
                    padding: 20px;
                }

                .close-popupp {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    cursor: pointer;
                }
                #hiscontainer {
                    width: 1100px;
                    height: 100px;
                    /*border: 2px solid #ccc;*/
                    padding: 5px;
                    /* Adjust top and bottom margin */
                    margin-left: 25px; /* Adjust left margin */
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    background-color: #f9f9f9;
                    border-radius: 10px;
                }

                .popupph {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #fefefe;
                    border: 1px solid #888;
                    z-index: 1000;
                    max-width: 80%; /* Set a maximum width for responsiveness */
                    max-height: 80%; /* Set a maximum height for the popup */
                    overflow-y: auto; /* Enable vertical scrolling if content exceeds height */

                }

                .popup-contentph {
                    padding: 20px;
                    
                }


                .close-popupph {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    cursor: pointer;
                }
                #openPopup {
                    background-image: linear-gradient(to right, #3ba33d 0%, #3cba3c 50%, #6dd36d 50%, #3cba3c 100%); /* Lessened dark green to light green */
                    margin: 10px;
                    padding: 5px 30px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: 0.5s;
                    background-size: 200% auto;
                    color: white;            
                    border-radius: 10px;
                    display: block;
                    width: 550px;
                    /* Removed box-shadow and border */
                    box-shadow: none;
                    border: none;
                }

                #openPopup:hover {
                    background-position: right center; /* change the direction of the change here */
                    color: #fff;
                    text-decoration: none;
                }
                .popupphd {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #fefefe;
                    border: 1px solid #888;
                    z-index: 1000;
                    max-width: 80%; /* Set a maximum width for responsiveness */
                    max-height: 80%; /* Set a maximum height for the popup */
                    overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
                }

                .popup-contentphd {
                    padding: 20px;
                }

                .close-popupphd {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    cursor: pointer;
                }
                #openPopupd {
                    background-image: linear-gradient(to right, #3ba33d 0%, #3cba3c 50%, #6dd36d 50%, #3cba3c 100%); /* Lessened dark green to light green */ /* Green gradient */
                    margin: 10px;
                    padding: 5px 30px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: 0.5s;
                    background-size: 200% auto;
                    color: white;            
                    border-radius: 10px;
                    display: block;
                    width: 550px;
                    /* Removed box-shadow and border */
                    box-shadow: none;
                    border: none;
                }



                #openPopupd:hover {
                    background-position: right center; /* change the direction of the change here */
                    color: #fff;
                    text-decoration: none;
                }
                input[name="generatedTitle"] {
                    /* Hide the default radio button */
                    display: none;
                }

                /* Style the label for the radio button */
                input[name="generatedTitle"] + label {
                    /* Use custom styling for the radio button */
                    position: relative;
                    padding-left: 25px; /* Adjust as needed */
                    cursor: pointer;
                }

                /* Style the custom radio button */
                input[name="generatedTitle"] + label:before {
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 16px; /* Size of the radio button */
                    height: 16px; /* Size of the radio button */
                    border: 2px solid #000; /* Border color */
                    border-radius: 50%; /* Make it circular */
                }

                /* Style the custom radio button when it's checked */
                input[name="generatedTitle"]:checked + label:before {
                    background-color: #000; /* Color of the radio button when checked */
                }
                input[name="generatedDes"] {
                    /* Hide the default radio button */
                    display: none;
                }

                /* Style the label for the radio button */
                input[name="generatedDes"] + label {
                    /* Use custom styling for the radio button */
                    position: relative;
                    padding-left: 25px; /* Adjust as needed */
                    cursor: pointer;
                }

                /* Style the custom radio button */
                input[name="generatedDes"] + label:before {
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 16px; /* Size of the radio button */
                    height: 16px; /* Size of the radio button */
                    border: 2px solid #000; /* Border color */
                    border-radius: 50%; /* Make it circular */
                }

                /* Style the custom radio button when it's checked */
                input[name="generatedDes"]:checked + label:before {
                    background-color: #000; /* Color of the radio button when checked */
                }
                #closePopupph:hover {
                    background-color: #c82333 !important;
                    border-color: #c82333 !important;
                }
                #closePopupphd:hover {
                    background-color: #c82333 !important;
                    border-color: #c82333 !important;
                }
                #closePopup:hover {
                    background-color: #c82333 !important;
                    border-color: #c82333 !important;
                }
                #closePopupd:hover {
                    background-color: #c82333 !important;
                    border-color: #c82333 !important;
                }
                
                .ck-editor__editable {
                        min-height: 260px; /* Adjust this value to your desired height */
                    }

            </style>
            <script>
           //let titleEditor = null; // Initialize CKEditor instance for titles
            let desEditor = null; // Initialize CKEditor instance for descriptions

            // Function to initialize CKEditor for titles
            /*function initializeTitleEditor() {
                ClassicEditor
                    .create(document.querySelector('#aiTitleInput'))
                    .then(editor => {
                        titleEditor = editor; // Store the CKEditor instance
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }*/

            // Function to initialize CKEditor for descriptions
            function initializeDescriptionEditor() {
                ClassicEditor
                    .create(document.querySelector('#aiDescriptionInput'))
                    .then(editor => {
                        desEditor = editor; // Store the CKEditor instance
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }

            // Load CKEditor script
            const ckeditorScript = document.createElement('script');
            ckeditorScript.src = 'https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js';
            ckeditorScript.onload = function() {
                // Initialize CKEditor instances after script is loaded
                //initializeTitleEditor();
                initializeDescriptionEditor();
            };
            document.head.appendChild(ckeditorScript);

            // Function to update CKEditor content for titles
           /* function updateCKEditor(selectedTitle) {
                if (titleEditor) {
                    titleEditor.setData(selectedTitle); // Set content of CKEditor for titles
                } else {
                    console.error('CKEditor for titles is not initialized yet.');
                }
            }
            function updateCKEditor(hisselectedTitle) {
                if (titleEditor) {
                    titleEditor.setData(hisselectedTitle); // Set content of CKEditor for titles
                } else {
                    console.error('CKEditor for titles is not initialized yet.');
                }
            }*/
            // Function to update CKEditor content for descriptions
            function updateCKEditorD(selectedDescription) {
                if (desEditor) {
                    desEditor.setData(selectedDescription); // Set content of CKEditor for descriptions
                } else {
                    console.error('CKEditor for descriptions is not initialized yet.');
                }
            }
            function updateCKEditorD(hisselecteddescrption) {
                if (desEditor) {
                    desEditor.setData(hisselecteddescrption); // Set content of CKEditor for descriptions
                } else {
                    console.error('CKEditor for descriptions is not initialized yet.');
                }
            }
        //TITLE
            document.querySelector('#logout-form input[type="submit"].optimize-ai').addEventListener('click', async function(event) {
            event.preventDefault(); // prevent the form from submitting normally
            const popup = document.getElementById('popup');
            const additional_info = document.getElementById('additional_info').value;
            console.log(additional_info);
            var productId = document.getElementById('productId').value; 
            var productName = document.getElementById('inputTitle').value; 
            const loader = document.getElementById('loader');

            loader.style.display = 'block';
            if (!navigator.onLine) {
                document.getElementById('offlinePopup').style.display = 'block';
                return;
            }
            
           
            try {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                const response = await fetch('{{ route('product.api', ['id' => ':id']) }}'.replace(':id', productId), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                    },
                    
                    body: JSON.stringify({ additional_info: additional_info}) 
                    // add any additional data you want to send to the server here
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                console.log(data);
                const titleResponse = data.titleResponse;
                const titleList = document.getElementById('aiTitlesList');
                titleList.innerHTML = ''; // Clear previous titles
               
                // Check if titleResponse is an array with at least one element
                if (Array.isArray(titleResponse) && titleResponse.length > 0 && typeof titleResponse[0] === 'string') {
                    // Split the first element (which is a string) into individual titles
                    const titles = titleResponse[0].split('\n');
                    document.getElementById('loader').style.display = 'block';

                    // Simulate delay to show loader
                    setTimeout(() => {
                                        fetch('{{ route('product.response', ['id' => ':id']) }}'.replace(':id', productId), {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                                        },
                                        
                                        body: JSON.stringify({ ProductID:productId, Product_Name:productName,GeneratedTitle:titles}) 
                                        // add any additional data you want to send to the server here
                                    });
                                        // Create list items with radio buttons for each title and append to the titleList
                                        titles.forEach((title, index) => {
                                            const cleanTitle = title.replace(/^\d+\.\s*"?|"\s*$/g, '');
                                            const listItem = document.createElement('li');
                                            const radioButton = document.createElement('input');
                                            radioButton.type = 'radio';
                                            radioButton.name = 'aiTitler';
                                            radioButton.value = cleanTitle;
                                            console.log(cleanTitle);
                                            
                                        
                                            //generatedTitles.push(cleanTitle);
                                            const bodyData = {
                                                additional_info: additional_info,
                                                title: cleanTitle,
                                            };
                                            // Update the fetch body with AI-generated title and description
                                            response.body = JSON.stringify(bodyData);
                                            radioButton.addEventListener('change', function() {
                                                // Update the form's title input with the selected radio button's value
                                                /*const selectedTitle = this.value;

                                                // Set the content of the CKEditor with the selected radio button's value
                                                if (titleEditor) {
                                                    // Update the form's title input with the selected radio button's value
                                                    const selectedTitle = this.value;

                                                    // Set the content of the CKEditor with the selected radio button's value
                                                    updateCKEditor(selectedTitle);

                                                } else {
                                                    console.error('CKEditor is not initialized yet.');
                                                }*/
                                                if (this.checked) {
                                            // Update the form's title input with the selected radio button's value
                                            document.getElementById('aiTitleInput').value = this.value;
                                        }
                                            });

                                            const label = document.createElement('label');
                                            label.textContent = cleanTitle; // Display clean title without serial numbers and double quotation marks
                                            listItem.appendChild(radioButton);
                                            listItem.appendChild(label);
                                            titleList.appendChild(listItem);
                                        });

                                        popup.style.display = 'flex'; 
                                        document.getElementById('loader').style.display = 'none';
                                    popup.style.display = 'flex'; // Show the popup after fetching data
                                }, 2000);// Show the popup after fetching data
                                    } else {
                                        console.error('Invalid titleResponse:', titleResponse);
                                    }
                                } catch (error) {
                                    console.error('There was a problem with the fetch operation:', error);
                                }
            });
            document.getElementById('additional_info').addEventListener('keypress', function(event) {
                                    if (event.key === 'Enter') {
                                        event.preventDefault(); // Prevent form submission when Enter key is pressed
                                    }
            });
        
            //DESCRIPTION
            document.querySelector('#logout-form input[type="submit"].optimize-aid').addEventListener('click', async function(event) {
                        event.preventDefault(); // prevent the form from submitting normally
                        const popup = document.getElementById('descriptionPopup');
                        const additional_infod = document.getElementById('additional_infod').value;
                        console.log(additional_infod);
                        var productId = document.getElementById('productId').value; 
                        var productDes = document.getElementById('inputDescription').value;
                        const loader1 = document.getElementById('loader1');

                        loader1.style.display = 'block'; 
                        if (!navigator.onLine) {
                            document.getElementById('offlinePopup').style.display = 'block';
                            return;
                        }
                        try {
                            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                            const response = await fetch('{{ route('product.des', ['id' => ':id']) }}'.replace(':id', productId), {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                                },
                            body: JSON.stringify({ additional_infod: additional_infod }) // add any additional data you want to send to the server here
                            });

                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }

                            const data = await response.json();
                            console.log(data);
                            const descriptionResponse = data.descriptionResponse;
                            const titleList = document.getElementById('aiDescriptionsList');
                            titleList.innerHTML = ''; // Clear previous titles
                            
                            // Check if titleResponse is an array with at least one element
                            if (Array.isArray(descriptionResponse) && descriptionResponse.length > 0 && typeof descriptionResponse[0] === 'string') {
                                // Split the first element (which is a string) into individual titles
                                const titles = descriptionResponse[0].split('\n');
                                document.getElementById('loader1').style.display = 'block';

                                // Simulate delay to show loader
                                setTimeout(() => {
                                                    fetch('{{ route('product.responsed', ['id' => ':id']) }}'.replace(':id', productId), {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/json',
                                                            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                                                        },
                                                        
                                                        body: JSON.stringify({ ProductID:productId,GeneratedDescription:titles}) 
                                                        // add any additional data you want to send to the server here
                                                    });

                                                    // Create list items with radio buttons for each title and append to the titleList
                                                    titles.forEach((des, index) => {
                                                        const cleandes =des.replace(/^\d+\.\s*"?|"\s*$/g, '');
                                                        const listItem = document.createElement('li');
                                                        const radioButton = document.createElement('input');
                                                        radioButton.type = 'radio';
                                                        radioButton.name = 'aiTitlerd';
                                                        radioButton.value = cleandes;
                                                        radioButton.addEventListener('change', function() {
                                                            if (this.checked) {
                                                                // Update the form's title input with the selected radio button's value
                                                                    const selectedDescription = this.value;
                                                                    // Set the content of the CKEditor with the selected radio button's value
                                                                    updateCKEditorD(selectedDescription);
                                                                    
                                                                }

                                                                
                                                        });
                                                        const label = document.createElement('label');
                                                        label.textContent = cleandes; // Display clean description without serial numbers and double quotation marks
                                                        listItem.appendChild(radioButton);
                                                        listItem.appendChild(label);
                                                        titleList.appendChild(listItem);
                                                    });

                                                    popup.style.display = 'flex'; // Show the popup after fetching data
                                                    document.getElementById('loader1').style.display = 'none';
                                                        popup.style.display = 'flex'; // Show the popup after fetching data
                                                    }, 2500);
                                                } else {
                                                    console.error('Invalid titleResponse:', titleResponse);
                                                }
                                            } catch (error) {
                                                console.error('There was a problem with the fetch operation:', error);
                                            }
                                        });
                                        document.getElementById('additional_infod').addEventListener('keypress', function(event) {
                                            if (event.key === 'Enter') {
                                            event.preventDefault(); // Prevent form submission when Enter key is pressed
                                        }
             });
            //Pop up for history title
            document.getElementById("openPopup").addEventListener("click", function() {
                        document.getElementById("historyPopup").style.display = "block";
                        // Get the product ID from the user
                        var productId = document.getElementById("productId").value;

                        // Fetch the product history from the server
                        fetch('/product/' + productId + '/ai-edit/history')
                            .then(response => response.json())
                            .then(data => {
                                if (data.length === 0) {
                                    document.getElementById("popupContent").innerHTML = "<p>No History</p>";
                                } else {
                                    var radioHTML = "<p>View revision history for title</p>";
                                    data.forEach(function(title, index) {
                                        const cleanTitle = title.replace(/^\d+\.\s*"?|"\s*$/g, ''); // Remove serial numbers
                                        radioHTML += `<input type="radio" id="title${index}" name="generatedTitle" value="${cleanTitle}">
                                                <label for="title${index}">${cleanTitle}</label><br>`;
                                    });
                                    document.getElementById("popupContent").innerHTML = radioHTML;

                                    // Add event listener for radio buttons
                                    document.querySelectorAll('input[type="radio"][name="generatedTitle"]').forEach(function(radio) {
                                        radio.addEventListener("change", function() {
                                            // Get the selected title
                                            const hisselectedTitle = this.value;
                                            
                                            if (this.checked) {
                                            // Update the form's title input with the selected radio button's value
                                            document.getElementById('aiTitleInput').value = this.value;
                                        }
                                        });
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                });

                //Pop up for history Description
                document.getElementById("openPopupd").addEventListener("click", function() {
                document.getElementById("historyPopupd").style.display = "block";
                // Get the product ID from the user
                var productId = document.getElementById("productId").value;

                // Fetch the product history from the server
                fetch('/product/' + productId + '/ai-edit/historyd')
                    .then(response => response.json())
                    .then(data => {
                        console.log('Received data:', data); // Log received data

                        if (data.length === 0) {
                            document.getElementById("popupContentd").innerHTML = "<p>No History</p>";
                        } else {
                            var radioHTML = "<p>View revision history for Description</p>";
                            data.forEach(function(des, index) {
                                const cleandescr = des.replace(/^\d+\.\s*"?|"\s*$/g, ''); // Remove serial numbers
                                console.log('Clean title:', cleandescr); // Log clean title
                                radioHTML += `<input type="radio" id="des${index}" name="generatedDes" value="${cleandescr}">
                                        <label for="des${index}">${cleandescr}</label><br>`;
                            });
                            console.log('Generated HTML:', radioHTML); // Log generated HTML
                            document.getElementById("popupContentd").innerHTML = radioHTML;

                            // Add event listener for radio buttons
                            document.querySelectorAll('input[type="radio"][name="generatedDes"]').forEach(function(radio) {
                                radio.addEventListener("change", function() {
                                    // Get the selected title
                                    const hisselecteddescrption = this.value;
                                    
                                    // Update the CKEditor textarea with the selected title
                                    updateCKEditorD(hisselecteddescrption)
                                });
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Fetch error:', error); // Log fetch error
                    });
                });

                document.getElementById('cp').addEventListener('click', function() {
                    // Hide the popup
                    document.getElementById('popup').style.display = 'none';
                });
                document.getElementById('closePopup').addEventListener('click', function() {
                    // Hide the popup
                    document.getElementById('descriptionPopup').style.display = 'none';
                });
                document.getElementById('closePopupp').addEventListener('click', function() {
                    // Hide the popup
                    document.getElementById('offlinePopup').style.display = 'none';
                });
                document.getElementById('closePopupph').addEventListener('click', function() {
                    // Hide the popup
                    document.getElementById('historyPopup').style.display = 'none';
                });
                document.getElementById('closePopupphd').addEventListener('click', function() {
                    // Hide the popup
                    document.getElementById('historyPopupd').style.display = 'none';
                });

                document.getElementById('aiTitleInput').addEventListener('keydown', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                    }
                });
                document.getElementById('aiUpdateButton').addEventListener('click', function(event) {
                event.preventDefault();
                
                // Get data from CKEditor instances
                //const aiTitle = titleEditor ? titleEditor.getData() : '';
                var aiTitle = document.getElementById('aiTitleInput').value;
                const aiDescription = desEditor ? desEditor.getData() : '';
                
                
                // Log CKEditor data
                logCKEditorData();

                // Get other form data
                var formData = new FormData(document.getElementById('aieditform'));
                var productId = document.getElementById('productId').value;

                // Append CKEditor content and other form data
                formData.append('aiTitle', aiTitle);
                formData.append('aiDescription', aiDescription);
                formData.append('id', productId);

                // Log the data for verification
                console.log('AI Title:', aiTitle);
                console.log('AI Description:', aiDescription);
                console.log('Product ID:', productId);

                fetch('{{ route('product.ai-edit', ['id' => ':id']) }}'.replace(':id', productId), {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect to the product CRUD page
                        window.location.href = '/admin/productitems';
                    } else {
                        // Display an error message
                        alert('Error updating AI Edit data.');
                    }
                })
                .catch(error => {
                    // Display an error message
                    alert('Error updating AI data.');
                });
            });

            // Function to log CKEditor data
            function logCKEditorData() {
                // Get data from CKEditor instances
               // const aiTitle = titleEditor ? titleEditor.getData() : '';
                const aiDescription = desEditor ? desEditor.getData() : '';

                // Log the data to the console
                //console.log('AI Title:', aiTitle);
                console.log('AI Description:', aiDescription);
            }
        </script>
        </body>
        </html>