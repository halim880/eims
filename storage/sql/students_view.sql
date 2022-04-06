SELECT
    u.name AS student_name,
    u.email AS email,
    st.id AS student_id,
    ses.name AS session,
    ses.batch_number AS batch,
    dept.name AS department,
    sem.name AS semester,
    st.father_name AS father_name,
    st.mother_name AS mother_name,
    st.dob AS dob,
    st.phone AS phone,
    IF(
        st.blood_group IS NULL,
        '',
        st.blood_group
    ) AS blood_group,
    st.current_address AS current_address,
    st.permanent_address AS permanent_address
FROM
    (
        (
            (
                (
                    eims.students st
                JOIN eims.users u
                ON
                    (u.id = st.user_id)
                )
            JOIN eims.departments dept
            ON
                (dept.id = st.department_id)
            )
        JOIN eims.semesters sem
        ON
            (sem.id = st.semester_id)
        )
    JOIN eims.sessions ses
    ON
        (st.session_id = ses.id)
    )