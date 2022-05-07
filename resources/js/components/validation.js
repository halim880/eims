
const validate = values => {
    let errors = {}

    if (!values.name) {
        errors.name = "Required"
    }
    if (!values.email) {
        errors.email = "Required"
    }
    return errors;
}

export default validate;