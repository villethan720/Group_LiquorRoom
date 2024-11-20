<html>
    <head>
        <title>Chatbot</title>

    </head>
    <body>
        <div class="chat-container">
            <h1>Bot</h1>
            <div id="chatbot">
                <div id="messages"></div>
            </div>

            <form id="chat-form" method="POST">
                <input type="text" name="user_input" placeholder="Ask me a question" required> 
                <button type="submit">send</button>
            </form>
        </div>

        <script>
            const form = documnet.getElementById('chat-form');
            const message = document.getElementById('messages');

            form.addEventListener("submit", async (e) => {
                e.preventdefault();
                const userInput = document.getElementById('user_input').value;
                const userMessage = `<div class="user-message"><strong>You:</strong> $user_input`;
                messages.innerHTML += userMessage;

                //fetch data
                const response = await fetch('bot_logic.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSeaarchParams({user_input: userInput })
                });

                const botResponse = await response.text();
                const botMessage = `<div class="bot-message"><strong>Bot:</strong>`
                message.innerHTML += botMessage;

                form.reset();
                
            });
        </script>


    </body>
    </html>