const errorTexts = {
  fullName: "Only letters, spaces and hyphens allowed.",
  age: "Age must be 18 or older.",
  phone: "Format must be (XXX) XXX-XXXX.",
  email: "Enter a valid email address.",
  insuranceProvider: "Please select a provider.",
  policyNumber: "Must be alphanumeric and 10 characters long.",
  username: "Username must be more than 5 characters.",
  password: "Min 8 chars, must include letter, number & symbol.",
  confirmPassword: "Passwords do not match."
};

const form = document.getElementById('registrationForm');
const fullName = document.getElementById('fullName');
const age = document.getElementById('age');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const insuranceProvider = document.getElementById('insuranceProvider');
const policyNumber = document.getElementById('policyNumber');
const username = document.getElementById('username');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');

function setError(fieldId, show, message) {
  const errDiv = document.getElementById(fieldId + 'Err');
  if (show) {
    errDiv.textContent = message;
    errDiv.style.display = 'block';
  } else {
    errDiv.textContent = '';
    errDiv.style.display = 'none';
  }
}

function validateForm() {
  let valid = true;

  const nameVal = fullName.value.trim();
  if (!/^[A-Za-z\s-]+$/.test(nameVal)) {
    setError('fullName', true, errorTexts.fullName);
    valid = false;
  } else {
    setError('fullName', false, '');
  }

  const ageVal = parseInt(age.value, 10);
  if (isNaN(ageVal) || ageVal < 18) {
    setError('age', true, errorTexts.age);
    valid = false;
  } else {
    setError('age', false, '');
  }
  const phoneVal = phone.value.trim();
  if (!/^\d{10}$/.test(phoneVal)) {
    setError('phone', true, errorTexts.phone);
    valid = false;
  } else {
    setError('phone', false, '');
  }


  const emailVal = email.value.trim();
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)) {
    setError('email', true, errorTexts.email);
    valid = false;
  } else {
    setError('email', false, '');
  }

  const usernameVal = username.value.trim();
  if (usernameVal.length <= 5) {
    setError('username', true, errorTexts.username);
    valid = false;
  } else {
    setError('username', false, '');
  }

  const passwordVal = password.value;
  if (
    passwordVal.length < 8 ||
    !/[A-Za-z]/.test(passwordVal) ||
    !/[0-9]/.test(passwordVal) ||
    !/[^A-Za-z0-9]/.test(passwordVal)
  ) {
    setError('password', true, errorTexts.password);
    valid = false;
  } else {
    setError('password', false, '');
  }

  if (password.value !== confirmPassword.value || !confirmPassword.value) {
    setError('confirmPassword', true, errorTexts.confirmPassword);
    valid = false;
  } else {
    setError('confirmPassword', false, '');
  }

  return valid;
}

[
  fullName, age, phone, email, insuranceProvider,
  policyNumber, username, password, confirmPassword
].forEach(input => {
  input.addEventListener('input', () => {
    setError(input.id, false, '');
  });
});

form.addEventListener('submit', function (e) {
  e.preventDefault();
  if (validateForm()) {
    alert('Registration successful!');
    form.reset();
  }
});