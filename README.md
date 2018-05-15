ini license sublime yang baru

—– BEGIN LICENSE —–
TwitterInc
200 User License
EA7E-890007
1D77F72E 390CDD93 4DCBA022 FAF60790
61AA12C0 A37081C5 D0316412 4584D136
94D7F7D4 95BC8C1C 527DA828 560BB037
D1EDDD8C AE7B379F 50C9D69D B35179EF
2FE898C4 8E4277A8 555CE714 E1FB0E43
D5D52613 C3D12E98 BC49967F 7652EED2
9D2D2E61 67610860 6D338B72 5CF95C69
E36B85CC 84991F19 7575D828 470A92AB
—— END LICENSE ——


dan ini adalah trigger dalam daatabase ORACLE
CREATE SEQUENCE seq_id_master_hris;

CREATE OR REPLACE TRIGGER trig_increment_master_hris
  BEFORE INSERT ON MASTER_HRIS
  FOR EACH ROW
BEGIN
  SELECT seq_id_master_hris.nextval
  INTO :new.ID
  FROM dual;
END;


Jika Triger yang diatas tidak berfungsi cobai yang ini :

create sequence log_seq 
start with 1 
increment by 1 
nomaxvalue;

create trigger log_trigger
before insert on CREATE_LOG
for each row
begin
select log_seq.nextval into :new.id from dual;
end;

