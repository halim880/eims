CREATE VIEW hostel_applications_view as SELECT
    hsa.id AS form_id,
    stv.student_id AS student_id,
    stv.student_name AS student_name,
    stv.department AS department,
    stv.session AS session,
    stv.semester AS semester,
    stv.phone AS phone,
    stv.email AS email,
    stv.father_name AS father_name,
    stv.mother_name AS mother_name,
    stv.dob AS dob,
    stv.blood_group AS blood_group,
    hsa.father_occupation AS father_occupation,
    hsa.father_yearly_income AS father_yearly_income,
    hsa.mother_occupation AS mother_occupation,
    hsa.mother_yearly_income AS mother_yearly_income,
    hsa.total_family_member AS total_family_member,
    hsa.yearly_family_income AS yearly_family_income,
    hsa.current_address AS current_address,
    hsa.permanent_address AS permanent_address,
    hsa.created_at AS created_at
FROM
    (
        hostel_sit_applications hsa
    JOIN students_view stv
    ON
        (
            stv.student_id = hsa.student_id
        )
    )
ORDER BY
    hsa.id
DESC
    