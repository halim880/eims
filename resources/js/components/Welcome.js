import axios from 'axios';
import React, {useState} from 'react';


const Welcome = () => {
    var [student, setStudent] = useState([]);

    function getStudent() {
        axios.get('api/students').then((res=> {
            var students = res.data.students;
            setStudent(students);
        }));
    }

    return (
        <div>
            <button onClick={getStudent}>Get student</button>
            <div>
                {student.map(s=><p key={s.id}>{s.name}</p>)}
            </div>
        </div>
    );
}

export default Welcome;