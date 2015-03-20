--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: client; Type: TABLE; Schema: public; Owner: laujmimna; Tablespace: 
--

CREATE TABLE client (
    id integer NOT NULL,
    name character varying
);


ALTER TABLE client OWNER TO laujmimna;

--
-- Name: client_id_seq; Type: SEQUENCE; Schema: public; Owner: laujmimna
--

CREATE SEQUENCE client_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE client_id_seq OWNER TO laujmimna;

--
-- Name: client_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: laujmimna
--

ALTER SEQUENCE client_id_seq OWNED BY client.id;


--
-- Name: clients; Type: TABLE; Schema: public; Owner: laujmimna; Tablespace: 
--

CREATE TABLE clients (
    id integer NOT NULL,
    name character varying,
    client_id integer
);


ALTER TABLE clients OWNER TO laujmimna;

--
-- Name: clients_id_seq; Type: SEQUENCE; Schema: public; Owner: laujmimna
--

CREATE SEQUENCE clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE clients_id_seq OWNER TO laujmimna;

--
-- Name: clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: laujmimna
--

ALTER SEQUENCE clients_id_seq OWNED BY clients.id;


--
-- Name: name; Type: TABLE; Schema: public; Owner: laujmimna; Tablespace: 
--

CREATE TABLE name (
    id integer NOT NULL,
    person character varying
);


ALTER TABLE name OWNER TO laujmimna;

--
-- Name: name_id_seq; Type: SEQUENCE; Schema: public; Owner: laujmimna
--

CREATE SEQUENCE name_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE name_id_seq OWNER TO laujmimna;

--
-- Name: name_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: laujmimna
--

ALTER SEQUENCE name_id_seq OWNED BY name.id;


--
-- Name: stylist; Type: TABLE; Schema: public; Owner: laujmimna; Tablespace: 
--

CREATE TABLE stylist (
    id integer NOT NULL,
    person character varying
);


ALTER TABLE stylist OWNER TO laujmimna;

--
-- Name: stylist_id_seq; Type: SEQUENCE; Schema: public; Owner: laujmimna
--

CREATE SEQUENCE stylist_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE stylist_id_seq OWNER TO laujmimna;

--
-- Name: stylist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: laujmimna
--

ALTER SEQUENCE stylist_id_seq OWNED BY stylist.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: laujmimna
--

ALTER TABLE ONLY client ALTER COLUMN id SET DEFAULT nextval('client_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: laujmimna
--

ALTER TABLE ONLY clients ALTER COLUMN id SET DEFAULT nextval('clients_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: laujmimna
--

ALTER TABLE ONLY name ALTER COLUMN id SET DEFAULT nextval('name_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: laujmimna
--

ALTER TABLE ONLY stylist ALTER COLUMN id SET DEFAULT nextval('stylist_id_seq'::regclass);


--
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: laujmimna
--

COPY client (id, name) FROM stdin;
\.


--
-- Name: client_id_seq; Type: SEQUENCE SET; Schema: public; Owner: laujmimna
--

SELECT pg_catalog.setval('client_id_seq', 1, false);


--
-- Data for Name: clients; Type: TABLE DATA; Schema: public; Owner: laujmimna
--

COPY clients (id, name, client_id) FROM stdin;
\.


--
-- Name: clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: laujmimna
--

SELECT pg_catalog.setval('clients_id_seq', 1, false);


--
-- Data for Name: name; Type: TABLE DATA; Schema: public; Owner: laujmimna
--

COPY name (id, person) FROM stdin;
1	
2	
3	
4	
5	
6	
7	
8	
9	
10	
11	
12	
13	
14	
15	
16	
17	
18	
19	
20	
21	
22	
23	
24	
\.


--
-- Name: name_id_seq; Type: SEQUENCE SET; Schema: public; Owner: laujmimna
--

SELECT pg_catalog.setval('name_id_seq', 24, true);


--
-- Data for Name: stylist; Type: TABLE DATA; Schema: public; Owner: laujmimna
--

COPY stylist (id, person) FROM stdin;
\.


--
-- Name: stylist_id_seq; Type: SEQUENCE SET; Schema: public; Owner: laujmimna
--

SELECT pg_catalog.setval('stylist_id_seq', 1, false);


--
-- Name: client_pkey; Type: CONSTRAINT; Schema: public; Owner: laujmimna; Tablespace: 
--

ALTER TABLE ONLY client
    ADD CONSTRAINT client_pkey PRIMARY KEY (id);


--
-- Name: clients_pkey; Type: CONSTRAINT; Schema: public; Owner: laujmimna; Tablespace: 
--

ALTER TABLE ONLY clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);


--
-- Name: name_pkey; Type: CONSTRAINT; Schema: public; Owner: laujmimna; Tablespace: 
--

ALTER TABLE ONLY name
    ADD CONSTRAINT name_pkey PRIMARY KEY (id);


--
-- Name: stylist_pkey; Type: CONSTRAINT; Schema: public; Owner: laujmimna; Tablespace: 
--

ALTER TABLE ONLY stylist
    ADD CONSTRAINT stylist_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: laujmimna
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM laujmimna;
GRANT ALL ON SCHEMA public TO laujmimna;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

