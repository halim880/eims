SELECT
    r.id AS id,
    r.student_id AS student_id,
    e.id AS exam_id,
    c.course_code AS course_code,
    c.title AS course_title,
    c.credit AS credit,
    e.name AS exam_name,
    r.obtained_marks AS obtained_marks,
    r.full_marks AS full_marks,
    r.created_at AS created_at,
    r.updated_at AS updated_at,
    u.name AS stored_by
FROM
    (
        (
            (
                eims.results r
            JOIN eims.courses c
            ON
                (r.course_id = c.id)
            )
        JOIN eims.exams e
        ON
            (e.id = r.exam_id)
        )
    JOIN eims.users u
    ON
        (r.stored_by_user_id = u.id)
    )