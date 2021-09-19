CREATE TABLE users (
	user_id INT NOT NULL PRIMARY KEY,
  first_name VARCHAR (20) NOT NULL,
  last_name VARCHAR (40) NOT NULL,
  emergency_contact_id INT NOT NULL,
  allergy_count INT NOT NULL,
  allergies_text VARCHAR NOT NULL,
);

CREATE TABLE emergency_contacts (
	emergency_id INT NOT NULL PRIMARY KEY,
  emergency_first VARCHAR (20) NOT NULL,
  emergency_last VARCHAR (40) NOT NULL,
  emergency_phone VARCHAR (15) INT NOT NULL,
);
