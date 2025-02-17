<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Silver Ecommerce</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .profile-card {
            margin-bottom: 20px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
        }

        .edit-form {
            display: none;
            flex-direction: column;
        }

        .edit-form input {
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-card">
            <img id="avatar" src="user-avatar.png" alt="User Avatar" class="avatar">
            <input type="file" id="imageUpload" class="hidden" accept="image/*" onchange="changeImage(event)">
            <button onclick="document.getElementById('imageUpload').click()">Change Image</button>
            <h3 id="username">John Doe</h3>
            <p>Email: <span id="email">johndoe@example.com</span></p>
            <p>Phone: <span id="phone">+91 9876543210</span></p>
            <button onclick="toggleEditForm()">Edit Profile</button>
        </div>

        <form class="edit-form" id="edit-form" onsubmit="updateProfile(event)">
            <input type="text" id="edit-username" placeholder="Enter new name" required>
            <input type="email" id="edit-email" placeholder="Enter new email" required>
            <input type="text" id="edit-phone" placeholder="Enter new phone number" required>
            <button type="submit">Save Changes</button>
        </form>

        <h3>Order History</h3>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="order-history">
                <tr>
                    <td>#12345</td>
                    <td>2025-02-10</td>
                    <td>Shipped</td>
                    <td>₹5,000</td>
                </tr>
                <tr>
                    <td>#12346</td>
                    <td>2025-01-25</td>
                    <td>Delivered</td>
                    <td>₹3,200</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function toggleEditForm() {
            document.getElementById('edit-form').style.display = 'flex';
        }

        function updateProfile(event) {
            event.preventDefault();

            const newUsername = document.getElementById('edit-username').value;
            const newEmail = document.getElementById('edit-email').value;
            const newPhone = document.getElementById('edit-phone').value;

            document.getElementById('username').innerText = newUsername;
            document.getElementById('email').innerText = newEmail;
            document.getElementById('phone').innerText = newPhone;

            document.getElementById('edit-form').style.display = 'none';
        }

        function changeImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('avatar').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>