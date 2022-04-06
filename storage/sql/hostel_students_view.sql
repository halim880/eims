CREATE VIEW hostel_students_view as SELECT
    hostels.name AS hostel_name,
    hostels.id AS hostel_id,
    sv.student_name AS student_name,
    sv.student_id AS student_id,
    sv.department AS department,
    sv.session AS session,
    sv.semester AS semester,
    sv.father_name AS father_name,
    sv.mother_name AS mother_name,
    sv.dob AS dob,
    sv.phone AS phone,
    sv.email AS email,
    sv.permanent_address AS permanent_address,
    sv.blood_group AS blood_group,
    hm.room_no AS room_no,
    hm.sit_no AS sit_no
FROM
    (
        (
            students_view sv
        JOIN hostel_members hm
        ON
            (sv.student_id = hm.student_id)
        )
    JOIN hostels ON
        (hm.hostel_id = hostels.id)
    )