import ReactDOM from 'react-dom';
import StudentEntryForm from './components/StudentEntryForm';
const { default: Welcome } = require("./components/Welcome");


if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

if (document.getElementById('welcome')) {
    ReactDOM.render(<Welcome />, document.getElementById('welcome'));
}


if (document.getElementById('StudentEntryForm')) {
    ReactDOM.render(<StudentEntryForm />, document.getElementById('StudentEntryForm'));
}

if (document.getElementById('imageCarosel')) {
    ReactDOM.render(<Example />, document.getElementById('imageCarosel'));
}
