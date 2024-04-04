const form = document.getElementById('myForm');
const responseDiv = document.createElement('div');
responseDiv.id = 'response';
form.parentNode.insertBefore(responseDiv, form.nextSibling);

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const formData = new FormData(form);
  const name = formData.get('name');
  const email = formData.get('email');
  const phone = formData.get('phone');
  const date = formData.get('date');
  const time = formData.get('time');
  const service = formData.get('service');

  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('Date:', date);
  console.log('Time:', time);
  console.log('Service:', service);

  // send form data to server
  fetch('admin/insertdata.php', {
    method: 'POST',
    body: formData,
  })
  .then(response => {
    if (response.ok) {
      return response.text();
    } else {
      throw new Error('Response error.');
    }
  })
  .then(data => {
    console.log('Server response:', data);
    responseDiv.classList.add('success');
    responseDiv.textContent = 'Form submitted successfully!';
    responseDiv.style.display = 'block';

    // clear form fields
    form.reset();
  })
  .catch(error => {
    console.error('Error:', error);
    responseDiv.classList.add('error');
    responseDiv.textContent ='Error submitting form.';
    responseDiv.style.display = 'block';});
});