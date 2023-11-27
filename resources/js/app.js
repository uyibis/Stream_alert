/*
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const echo = new Echo({
    broadcaster: 'pusher',
    key: '0394c047934dcb7424a5', // Add your Pusher key here
    cluster: 'mt1', // Add your Pusher cluster here
    encrypted: true,
});

const channel = echo.channel('status-liked');
channel.listen('event-name', (event) => {
    console.log('Received event:', event);
});
*/



import Echo from 'laravel-echo';
import axios from 'axios';
import Pusher from 'pusher-js'; // Import Pusher using ES6 import



const echo = new Echo({
    broadcaster: 'pusher',
    key: '0394c047934dcb7424a5', // Replace with your actual Pusher key
    cluster: 'mt1', // Replace with your actual Pusher cluster
    encrypted: true,
    client: Pusher, // Set the Pusher client
});



// Subscribe to the channel
const channel = echo.channel('status-liked');
channel.listen('event-name', (event) => {
    console.log('Received event:', event);

    // Fetch additional data from your Laravel backend using Axios
    axios.get('YOUR_BACKEND_ENDPOINT', {
        params: {
            // You can pass any additional parameters to your backend
        }
    })
        .then(response => {
            console.log('Response from backend:', response.data);
            // Process the response data as needed
        })
        .catch(error => {
            console.error('Error fetching data from backend:', error);
        });
})


// Check if echo.connector is defined
if (echo.connector) {
    echo.connector.socket.on('connect', () => {
        console.log('Connected to Pusher');
    });

    echo.connector.socket.on('disconnect', () => {
        console.log('Disconnected from Pusher');
    });
} else {
    console.error('Pusher connection not initialized.');
}
