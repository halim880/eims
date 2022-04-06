Create view hostel_payments_view as SELECT
    hp.student_id AS student_id,
    sem.name AS semester,
    hp.amount AS amount,
    hp.status AS status
FROM
    (
        eims.hostel_payments hp
    JOIN eims.semesters AS sem
    ON
        (hp.semester_id = sem.id)
    )