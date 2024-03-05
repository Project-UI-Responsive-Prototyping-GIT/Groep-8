// Test case 1: Successful form submission
// Simulate a successful response from the server
fetch.mockResolvedValueOnce({
  ok: true,
  json: jest.fn().mockResolvedValueOnce({ message: 'Form submitted successfully' })
});

// Call the formSubmission function
await formSubmission();

// Expected output: The success message should be logged to the console
console.log('Form submitted successfully');

// Test case 2: Failed form submission
// Simulate a failed response from the server
fetch.mockResolvedValueOnce({
  ok: false,
  status: 500,
  statusText: 'Internal Server Error'
});

// Call the formSubmission function
await formSubmission();

// Expected output: The error message should be logged to the console
console.error('Request niet gelukt!');

// Test case 3: Invalid form data
// Simulate invalid form data by not providing a value for the 'name' field
document.getElementById.mockReturnValueOnce({ value: '' });

// Call the formSubmission function
await formSubmission();

// Expected output: The error message should be logged to the console
console.error('Request niet gelukt!');// Test case 1: Successful form submission
// Simulate a successful response from the server
fetch.mockResolvedValueOnce({
  ok: true,
  json: jest.fn().mockResolvedValueOnce({ message: 'Form submitted successfully' })
});

// Call the formSubmission function
await formSubmission();

// Expected output: The success message should be logged to the console
console.log('Form submitted successfully');

// Test case 2: Failed form submission
// Simulate a failed response from the server
fetch.mockResolvedValueOnce({
  ok: false,
  status: 500,
  statusText: 'Internal Server Error'
});

// Call the formSubmission function
await formSubmission();

// Expected output: The error message should be logged to the console
console.error('Request niet gelukt!');

// Test case 3: Invalid form data
// Simulate invalid form data by not providing a value for the 'name' field
document.getElementById.mockReturnValueOnce({ value: '' });

// Call the formSubmission function
await formSubmission();

// Expected output: The error message should be logged to the console
console.error('Request niet gelukt!');

// Test case 4: Valid form submission
// Simulate a successful response from the server
fetch.mockResolvedValueOnce({
  ok: true,
  json: jest.fn().mockResolvedValueOnce({ message: 'Form submitted successfully' })
});

// Set values for form fields
document.getElementById.mockReturnValueOnce({ value: 'John' });
document.getElementById.mockReturnValueOnce({ value: '' });
document.getElementById.mockReturnValueOnce({ value: 'Doe' });
document.getElementById.mockReturnValueOnce({ value: '1234567890' });
document.getElementById.mockReturnValueOnce({ value: 'john.doe@example.com' });
document.getElementById.mockReturnValueOnce({ value: '2' });
document.getElementById.mockReturnValueOnce({ value: '12:00' });
document.getElementById.mockReturnValueOnce({ value: '2022-01-01' });
document.getElementById.mockReturnValueOnce({ checked: true });

// Call the formSubmission function
await formSubmission();

// Expected output: The success message should be logged to the console
console.log('Form submitted successfully');