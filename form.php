<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir</title>
   
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img
                    src="https://imaji.io/stored/2021/12/IMAJI-color-full-black-transparent.png"
                    jsaction="VQAsE"
                    class="sFlh5c pT0Scc iPVvYb"
                    style="max-width: 3840px; height: 53px; margin: 0px; width: 213px"
                    alt="IMAJI | Building Sustainability Through IoT"
                    jsname="kn3ccd"
                    aria-hidden="false"
                />
            </a>
        </div>
    </nav>

    <h1>Formulir</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data
        $nama = $_POST["nama"];
        $token = $_POST["token"];
        $chat_id = $_POST["chat"];
        $pesan = $_POST["pesan"];

        // You can use the form data as needed, for example, sending a message
        $apiToken = "6800551374:AAFDEoVS7FBXsGurHXEyLH0oeXKHBn-tV4M";
        $data = [
            'chat_id' => $chat_id,
            'text' => "Nama: $nama\nToken: $token\nPesan: $pesan",
        ];
        $response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Input Teks -->
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required />

        <label for="token">Token:</label>
        <input type="text" id="token" name="token" required />

        <label for="chat">chat_id:</label>
        <input type="text" id="chat" name="chat" required />

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <!--  Kirim -->
        <button type="submit">Submit</button>
    </form>

    <style>
        h1 body {
    font-family: "Arial", sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    color: #333;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #333;
  }

  input,
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: rgba(75, 75, 199, 0.733);
  }

  button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }
    </style>
</body>
</html>
