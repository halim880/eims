

DELIMITER //

DROP PROCEDURE IF EXISTS get_hostel_payments_by_student_id

CREATE PROCEDURE get_hostel_payments_by_student_id() @student_id int

BEGIN
    SELECT * FROM hostel_payments
    WHERE student_id = @student_id;
END
// DELIMITER
