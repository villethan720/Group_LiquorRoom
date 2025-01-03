let userActive = false;

//detect user activity
const detectActivity = () => {
    if(!userActive){
        userActive = true;

        //remove event listener once user activity is detected
        document.removeEventListener('mousemove', detectActivity);
        document.removeEventListener('keydown', detectActivity);

        //show the chatbot
        showChatbot();
    }
}

//function to show chatbot
const showChatbot = () => {
    const chatbotContainer = document.getElementById('chatbot-container');
    if (chatbotContainer) {
        chatbotContainer.classList.add('active');
        chatbotContainer.style.display = 'block';
    } else {
        console.log("error")
    }
};

//event listener to detect the user presence
document.addEventListener('mousemove', detectActivity);
document.addEventListener('keydown', detectActivity);

//button elements
const button = document.getElementById('toggleButton');
const content = document.getElementById('collapseContent');

//makes content collapsible
button.addEventListener('click', () => {
    if (content.style.display === 'none' || content.style.display === "") {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
})
