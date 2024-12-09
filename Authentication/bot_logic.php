<html>
    <head>
        <title>Chatbot</title>

        <link rel="stylesheet" href="/Authentication/stylesheets/botStyle.css">

    </head>
    <body>
        <div class="chat-container">
            <h2>Liquor Bot</h1>
            <div id="chatbot">
                <div id="messages"></div>
            </div>

            <form id="chat-form" method="POST">
                <input type="text" name="user_input" id="user_input" placeholder="Ask me a question" required> 
                <button type="submit">send</button>
            </form>
        </div>

        <script>
            const form = document.getElementById('chat-form');
            const messages = document.getElementById('messages');

            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                const userInput = document.getElementById('user_input').value;

                const userMessage = `<div class="user-message"><strong>You:</strong> ${userInput}</div>`;
                messages.innerHTML += userMessage;

                //fetch data
                try {
                    const response = await fetch('logic.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({ user_input: userInput })
                    });

                    const botResponse = await response.text();

                    // Display bot's message
                    const botMessage = `<div class="bot-message"><strong>Bot:</strong> ${botResponse}</div>`;
                    messages.innerHTML += botMessage;

                    // Scroll to the latest message
                    messages.scrollTop = messages.scrollHeight;

                } catch (error) {
                    const errorMessage = `<div class="bot-message"><strong>Bot:</strong> Sorry, something went wrong. Please try again later.</div>`;
                    messages.innerHTML += errorMessage;
                }

                // Reset the form
                form.reset();
                
            });
        </script>


    </body>
    </html>
