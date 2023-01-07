-- <Extrafields table>
-- Copyright (C) <2023>  <junior>

CREATE TABLE llx_musac_extrafields (
    rowid INTEGER AUTO_INCREMENT PRIMARY KEY,
    tms TIMESTAMP,
    fk_object INTEGER NOT NULL,
    import_key VARCHAR(14)
) ENGINE=innodb;
