import React from 'react';
import { useFormik } from 'formik';
import validate from './validation';
import axios from 'axios';


const initialValues = {
    id : 2016331509,
    name: 'Abdul Halim',
    email: 'a.halimics@gmail.com',
    password : 'password',
    department_id : 1,
    semester_id : 1001,
    session_id : 1,
    father_name : "tajul islam",
    mother_name : "Rasheda Khatun",
    current_address : "Address",
    permanent_address : "Permanent address",
    dob : "dob",
}

async function onSubmit(values) {
    await axios.post('http://127.0.0.1:8000/api/students', initialValues).then(res=> {
        
    }).catch(e=> console.log(e));
    console.log(values);
}


const StudentEntryForm = () => {

  const formik = useFormik({
    initialValues,
    onSubmit,
    validate,
  });

//   console.log(formik.values);

  return (
    <div className='row d-flex justify-content-center mt-5'>
        <div className='col-md-6'>
            <form onSubmit={formik.handleSubmit}>
                <div className='form-group'>
                    <label htmlFor="name">First Name</label>
                    <input
                        className='form-control'
                        id="name"
                        name="name"
                        type="text"
                        onChange={formik.handleChange}
                        value={formik.values.name}
                    />
                    {formik.errors.name && <div>{formik.errors.name}</div>}
                </div>
                <div className='form-group'>
                    <label htmlFor="email">First Name</label>
                    <input
                        className='form-control'
                        id="email"
                        name="email"
                        type="text"
                        onChange={formik.handleChange}
                        value={formik.values.email}
                    />
                    {formik.errors.email && <div>{formik.errors.email}</div>}
                </div>

                <div className='form-group'>
                    <label htmlFor="password">Password</label>
                    <input
                        className='form-control'
                        id="password"
                        name="password"
                        type="password"
                        onChange={formik.handleChange}
                        value={formik.values.password}
                    />
                    {formik.errors.password && <div>{formik.errors.password}</div>}

                </div>
                <button className='btn btn-primary mt-3' type="submit">Submit</button>
            </form>
        </div>
    </div>
  );
};

export default StudentEntryForm;