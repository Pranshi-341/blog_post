<!-- resources/js/components/SendVerificationEmail.vue -->

<template >
    <div>
      <button @click="sendVerificationEmail">Send Verification Email</button>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    methods: {
      async sendVerificationEmail() {
        try {
          const response = await axios.post('/api/send-verification-email');
          console.log(response.data.message);
        } catch (error) {
          console.error('Error sending verification email:', error);
        }
      },
    },
  };
  </script>
  