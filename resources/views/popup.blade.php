<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAI API Response</title>
    
    <style>
        #popup-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        #popup-message .popup-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        #popup-message .popup-content input[type="checkbox"] {
            margin-right: 10px;
        }

        #popup-message .popup-content button {
            float: right;
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 0;
            margin-top: -5px;
            margin-right: -5px;
        }

        #popup-message .popup-content button:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
<div id="popup-message">
    <div class="popup-content">
        <input type="checkbox" id="my-checkbox">
        <label for="my-checkbox">Title 1</label><br>
        <input type="checkbox" id="my-checkbox">
        <label for="my-checkbox">Title 2</label><br>
        <input type="checkbox" id="my-checkbox">
        <label for="my-checkbox">Title 3</label><br>
        <button id="close-button"> &times;</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const closeButton = document.getElementById('close-button');
    closeButton.addEventListener('click', () => {
        event.preventDefault();
        const popupMessage = document.getElementById('popup-message');
        popupMessage.style.display = 'none';
    });

    const checkbox = document.getElementById('my-checkbox');
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            console.log('Checkbox is checked.');
        } else {
            console.log('Checkbox is not checked.');
        }
    });

    const showPopupButton = document.getElementById('show-popup-button');
    showPopupButton.addEventListener('click', () => {
        const popupMessage = document.getElementById('popup-message');
        popupMessage.style.display = 'block';
    });
});
</script>

</body>
</html>