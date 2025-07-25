<?php
$db = new SQLite3('aerolineas.db');

$db->exec("DROP TABLE IF EXISTS aerolineas");


$db->exec("CREATE TABLE IF NOT EXISTS aerolineas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    pais TEXT NOT NULL,
    iata TEXT,
    icao TEXT,
    web TEXT,
    descripcion TEXT
)");

$db->exec("INSERT INTO aerolineas (nombre, pais, iata, icao, web, descripcion) VALUES
('American Airlines', 'Estados Unidos', 'AA', 'AAL', 'https://www.aa.com/', 'Una de las aerolíneas más grandes del mundo, opera una extensa red de vuelos nacionales e internacionales desde sus hubs en EE. UU.'),
('Delta Air Lines', 'Estados Unidos', 'DL', 'DAL', 'https://www.delta.com/', 'Aerolínea global con un servicio premium, conocida por su fiabilidad y su amplia red de rutas a nivel mundial.'),
('United Airlines', 'Estados Unidos', 'UA', 'UAL', 'https://www.united.com/', 'Una de las aerolíneas de legado más grandes de EE. UU., con una vasta red global y hubs importantes en todo el país.'),
('Southwest Airlines', 'Estados Unidos', 'WN', 'SWA', 'https://www.southwest.com/', 'Pionera en el modelo de bajo costo, famosa por su política de dos maletas facturadas gratis y servicio amable.'),
('Alaska Airlines', 'Estados Unidos', 'AS', 'ASA', 'https://www.alaskaair.com/', 'Aerolínea importante de la costa oeste de EE. UU., conocida por su servicio al cliente y su expansión en el mercado doméstico.'),
('JetBlue Airways', 'Estados Unidos', 'B6', 'JBU', 'https://www.jetblue.com/', 'Aerolínea de bajo costo premium, que ofrece comodidades como Wi-Fi gratuito y televisión en vivo en sus vuelos.'),
('Air Canada', 'Canadá', 'AC', 'ACA', 'https://www.aircanada.com/', 'La aerolínea de bandera y más grande de Canadá, con una extensa red de rutas nacionales e internacionales.'),
('WestJet', 'Canadá', 'WS', 'WJA', 'https://www.westjet.com/', 'Una de las principales aerolíneas canadienses, ofrece vuelos de bajo costo y servicio completo en su red.'),
('Ryanair', 'Irlanda', 'FR', 'RYR', 'https://www.ryanair.com/', 'La aerolínea de bajo costo más grande de Europa, conocida por sus tarifas económicas y su vasta red de destinos europeos.'),
('Lufthansa', 'Alemania', 'LH', 'DLH', 'https://www.lufthansa.com/', 'La aerolínea de bandera de Alemania y una de las más grandes de Europa, parte del Grupo Lufthansa con varias aerolíneas afiliadas.'),
('British Airways', 'Reino Unido', 'BA', 'BAW', 'https://www.britishairways.com/', 'La aerolínea de bandera del Reino Unido, con una fuerte presencia en rutas transatlánticas y una red global.'),
('Iberia', 'España', 'IB', 'IBE', 'https://www.iberia.com/', 'La aerolínea de bandera de España, con un fuerte enfoque en las rutas hacia América Latina y una amplia red europea.'),
('Vueling', 'España', 'VY', 'VLG', 'https://www.vueling.com/', 'Aerolínea de bajo costo española, parte de IAG, con una gran presencia en España y vuelos a destinos europeos.'),
('Air France', 'Francia', 'AF', 'AFR', 'https://www.airfrance.com/', 'La aerolínea de bandera de Francia, opera una extensa red global y es parte del grupo Air France-KLM.'),
('KLM', 'Países Bajos', 'KL', 'KLM', 'https://www.klm.com/', 'La aerolínea de bandera de los Países Bajos y la más antigua en operar bajo su nombre original, parte del grupo Air France-KLM.'),
('Turkish Airlines', 'Turquía', 'TK', 'THY', 'https://www.turkishairlines.com/', 'Aerolínea global con una de las redes de destinos más amplias del mundo, sirviendo como puente entre Europa y Asia/África.'),
('EasyJet', 'Reino Unido', 'U2', 'EZY', 'https://www.easyjet.com/', 'Una de las aerolíneas de bajo costo más grandes de Europa, con una fuerte presencia en aeropuertos principales.'),
('Norwegian Air Shuttle', 'Noruega', 'DY', 'NAX', 'https://www.norwegian.com/', 'Aerolínea de bajo costo escandinava, que ha reducido su enfoque en vuelos de larga distancia para centrarse en Europa.'),
('Wizz Air', 'Hungría', 'W6', 'WZZ', 'https://wizzair.com/', 'Aerolínea de ultra bajo costo enfocada en Europa Central y del Este, con una rápida expansión en el continente.'),
('SAS Scandinavian Airlines', 'Suecia', 'SK', 'SAS', 'https://www.flysas.com/', 'La aerolínea de bandera de Dinamarca, Noruega y Suecia, con una red que abarca Europa, Asia y Norteamérica.'),
('Finnair', 'Finlandia', 'AY', 'FIN', 'https://www.finnair.com/', 'La aerolínea de bandera de Finlandia, conocida por sus conexiones rápidas entre Europa y Asia a través de Helsinki.'),
('TAP Air Portugal', 'Portugal', 'TP', 'TAP', 'https://www.flytap.com/', 'La aerolínea nacional de Portugal, con una importante red de rutas hacia Brasil y otros destinos en América.'),
('LOT Polish Airlines', 'Polonia', 'LO', 'LOT', 'https://www.lot.com/', 'La aerolínea de bandera de Polonia, opera vuelos a destinos en Europa, Norteamérica y Asia.'),
('ITA Airways', 'Italia', 'AZ', 'ITY', 'https://www.ita-airways.com/', 'La aerolínea de bandera de Italia, sucesora de Alitalia, con el objetivo de revitalizar la conectividad aérea italiana.'),
('China Southern Airlines', 'China', 'CZ', 'CSN', 'https://www.csair.com/', 'Una de las tres grandes aerolíneas estatales de China, con una de las flotas más grandes del mundo.'),
('Air China', 'China', 'CA', 'CCA', 'https://www.airchina.com/', 'La aerolínea de bandera de la República Popular China, con su hub principal en Pekín.'),
('China Eastern Airlines', 'China', 'MU', 'CES', 'https://www.ceair.com/', 'Otra de las grandes aerolíneas estatales de China, con su hub principal en Shanghái.'),
('IndiGo', 'India', '6E', 'IGO', 'https://www.goindigo.in/', 'La aerolínea más grande de la India por cuota de mercado de pasajeros, conocida por su modelo de bajo costo.'),
('Japan Airlines', 'Japón', 'JL', 'JAL', 'https://www.jal.co.jp/', 'Una de las dos aerolíneas principales de Japón, con una reputación por su servicio y puntualidad.'),
('ANA All Nippon Airways', 'Japón', 'NH', 'ANA', 'https://www.ana.co.jp/', 'La aerolínea más grande de Japón por ingresos y número de pasajeros transportados, con un servicio muy valorado.'),
('Korean Air', 'Corea del Sur', 'KE', 'KAL', 'https://www.koreanair.com/', 'La aerolínea de bandera de Corea del Sur y una de las aerolíneas de carga más grandes del mundo.'),
('Asiana Airlines', 'Corea del Sur', 'OZ', 'AAR', 'https://flyasiana.com/', 'Una de las principales aerolíneas de Corea del Sur, conocida por su servicio de alta calidad.'),
('Singapore Airlines', 'Singapur', 'SQ', 'SIA', 'https://www.singaporeair.com/', 'Consistently clasificada entre las mejores aerolíneas del mundo por su servicio al cliente y experiencia a bordo.'),
('Emirates', 'Emiratos Árabes Unidos', 'EK', 'UAE', 'https://www.emirates.com/', 'Aerolínea de lujo con sede en Dubái, famosa por su moderna flota de aviones de fuselaje ancho y su extensa red global.'),
('Qatar Airways', 'Catar', 'QR', 'QTR', 'https://www.qatarairways.com/', 'Reconocida globalmente por su excelencia en el servicio y su vasta red de destinos internacionales.'),
('Etihad Airways', 'Emiratos Árabes Unidos', 'EY', 'ETD', 'https://www.etihad.com/', 'La aerolínea de bandera de los Emiratos Árabes Unidos, con sede en Abu Dabi, ofrece un servicio premium.'),
('Cathay Pacific Airways', 'Hong Kong', 'CX', 'CPA', 'https://www.cathaypacific.com/', 'La aerolínea de bandera de Hong Kong, un importante centro de conexión entre Asia y el resto del mundo.'),
('EVA Air', 'Taiwán', 'BR', 'EVA', 'https://www.evaair.com/', 'Aerolínea taiwanesa con alta calificación de seguridad y servicio, conocida por sus temáticas de Hello Kitty en algunos vuelos.'),
('Hainan Airlines', 'China', 'HU', 'CHH', 'https://www.hainanairlines.com/', 'Una de las aerolíneas más grandes de China, con un enfoque en el servicio de calidad y rutas internacionales.'),
('AirAsia', 'Malasia', 'AK', 'AXM', 'https://www.airasia.com/', 'Pionera en el modelo de bajo costo en Asia, con una extensa red en el sudeste asiático.'),
('LATAM Airlines Group', 'Chile', 'LA', 'LAN', 'https://www.latam.com/', 'El grupo de aerolíneas más grande de América Latina, con operaciones en varios países de la región.'),
('Avianca', 'Colombia', 'AV', 'AVA', 'https://www.avianca.com/', 'Una de las aerolíneas más antiguas del mundo y la más grande de Colombia, con una amplia red en América Latina.'),
('Azul Linhas Aéreas', 'Brasil', 'AD', 'AZU', 'https://www.voeazul.com.br/', 'Una de las principales aerolíneas brasileñas, conocida por su enfoque en la conectividad regional y el servicio.'),
('GOL Linhas Aéreas', 'Brasil', 'G3', 'GLO', 'https://www.voegol.com.br/', 'Aerolínea de bajo costo brasileña, con una extensa red de rutas domésticas y algunas internacionales.'),
('Aeroméxico', 'México', 'AM', 'AMX', 'https://www.aeromexico.com/', 'La aerolínea de bandera de México, con una red que abarca Norte, Centro y Sudamérica, Europa y Asia.'),
('Copa Airlines', 'Panamá', 'CM', 'CMP', 'https://www.copaair.com/', 'Con base en Panamá, es un hub estratégico para conexiones en todo el continente americano.'),
('Aerolíneas Argentinas', 'Argentina', 'AR', 'ARG', 'https://www.aerolineas.com.ar/', 'La aerolínea de bandera de Argentina, que conecta el país con destinos clave en América y Europa.'),
('South African Airways', 'Sudáfrica', 'SA', 'SAA', 'https://www.flysaa.com/', 'La aerolínea de bandera de Sudáfrica, opera vuelos dentro de África y a destinos intercontinentales.'),
('Ethiopian Airlines', 'Etiopía', 'ET', 'ETH', 'https://www.ethiopianairlines.com/', 'La aerolínea más grande de África y de más rápido crecimiento, con un hub importante en Adís Abeba.'),
('Royal Air Maroc', 'Marruecos', 'AT', 'RAM', 'https://www.royalairmaroc.com/', 'La aerolínea de bandera de Marruecos, con una fuerte presencia en África y Europa.'),
('Qantas Airways', 'Australia', 'QF', 'QFA', 'https://www.qantas.com/', 'La aerolínea de bandera de Australia, una de las aerolíneas más antiguas del mundo, conocida por su seguridad.'),
('Air New Zealand', 'Nueva Zelanda', 'NZ', 'ANZ', 'https://www.airnewzealand.com/', 'La aerolínea nacional de Nueva Zelanda, reconocida por su innovación y su excelente servicio a bordo.'),
('Virgin Australia', 'Australia', 'VA', 'VOZ', 'https://www.virginaustralia.com/', 'La segunda aerolínea más grande de Australia, ofreciendo un servicio completo y vuelos domésticos e internacionales.'),
('Swiss International Air Lines', 'Suiza', 'LX', 'SWR', 'https://www.swiss.com/', 'La aerolínea de bandera de Suiza, parte del Grupo Lufthansa, conocida por su puntualidad y calidad de servicio.'),
('Brussels Airlines', 'Bélgica', 'SN', 'BRU', 'https://www.brusselsairlines.com/', 'La aerolínea de bandera de Bélgica, con un enfoque en destinos africanos y europeos.'),
('Austrian Airlines', 'Austria', 'OS', 'AUA', 'https://www.austrian.com/', 'La aerolínea de bandera de Austria, parte del Grupo Lufthansa, con una red que incluye destinos de Europa, Asia y Norteamérica.'),
('Aer Lingus', 'Irlanda', 'EI', 'EIN', 'https://www.aerlingus.com/', 'La aerolínea de bandera de Irlanda, con una fuerte presencia en rutas transatlánticas entre Irlanda y Norteamérica.'),
('S7 Airlines', 'Rusia', 'S7', 'SBI', 'https://www.s7.ru/', 'Una de las aerolíneas más grandes de Rusia, con una extensa red de vuelos domésticos e internacionales.'),
('Aeroflot', 'Rusia', 'SU', 'AFL', 'https://www.aeroflot.ru/', 'La aerolínea de bandera de Rusia, una de las aerolíneas más antiguas y con una gran red de destinos.'),
('Pegasus Airlines', 'Turquía', 'PC', 'PGT', 'https://www.flypgs.com/', 'Una de las aerolíneas de bajo costo líderes en Turquía, con una red en Europa, Asia y África.'),
('Royal Jordanian', 'Jordania', 'RJ', 'RJA', 'https://www.rj.com/', 'La aerolínea de bandera de Jordania, con su base en Amán, conecta Oriente Medio con Europa, Asia, África y Norteamérica.'),
('EgyptAir', 'Egipto', 'MS', 'MSR', 'https://www.egyptair.com/', 'La aerolínea de bandera de Egipto, con una red que abarca Oriente Medio, África, Europa, Asia y Norteamérica.'),
('Saudia', 'Arabia Saudita', 'SV', 'SVA', 'https://www.saudia.com/', 'La aerolínea de bandera de Arabia Saudita, con un fuerte enfoque en vuelos a destinos religiosos y una creciente red internacional.'),
('Kuwait Airways', 'Kuwait', 'KU', 'KAC', 'https://www.kuwaitairways.com/', 'La aerolínea de bandera de Kuwait, conecta Oriente Medio con Europa, Asia, África y Norteamérica.'),
('Oman Air', 'Omán', 'WY', 'OAS', 'https://www.omanair.com/', 'La aerolínea nacional de Omán, con una reputación por su servicio de alta calidad y un centro en Mascate.'),
('Gulf Air', 'Baréin', 'GF', 'GFA', 'https://www.gulfair.com/', 'La aerolínea de bandera del Reino de Baréin, una de las aerolíneas más antiguas de la región del Golfo.'),
('EL AL Israel Airlines', 'Israel', 'LY', 'ELY', 'https://www.elal.com/', 'La aerolínea de bandera de Israel, conocida por sus estrictas medidas de seguridad.'),
('Air India', 'India', 'AI', 'AIC', 'https://www.airindia.com/', 'La aerolínea de bandera de la India, con una amplia red de vuelos domésticos e internacionales.'),
('SpiceJet', 'India', 'SG', 'SEJ', 'https://www.spicejet.com/', 'Aerolínea de bajo costo india, con un enfoque en la conectividad regional y tarifas competitivas.'),
('Vistara', 'India', 'UK', 'VTI', 'https://www.airvistara.com/', 'Una aerolínea india de servicio completo, reconocida por su calidad y su creciente red.'),
('Garuda Indonesia', 'Indonesia', 'GA', 'GIA', 'https://www.garuda-indonesia.com/', 'La aerolínea de bandera de Indonesia, conocida por su servicio cultural indonesio.'),
('Lion Air', 'Indonesia', 'JT', 'LNI', 'https://www.lionair.co.id/', 'Una de las aerolíneas de bajo costo más grandes de Indonesia y del sudeste asiático.'),
('Philippine Airlines', 'Filipinas', 'PR', 'PAL', 'https://www.philippineairlines.com/', 'La aerolínea de bandera de Filipinas, con una extensa red en Asia y el Pacífico, y vuelos transpacíficos.'),
('Vietnam Airlines', 'Vietnam', 'VN', 'HVN', 'https://www.vietnamairlines.com/', 'La aerolínea de bandera de Vietnam, con una red en Asia, Europa y Australia.'),
('Thai Airways International', 'Tailandia', 'TG', 'THA', 'https://www.thaiairways.com/', 'La aerolínea de bandera de Tailandia, conocida por su hospitalidad tailandesa y su amplia red de larga distancia.'),
('Malaysian Airlines', 'Malasia', 'MH', 'MAS', 'https://www.malaysiaairlines.com/', 'La aerolínea de bandera de Malasia, que conecta el país con destinos clave en Asia, Europa y Oceanía.'),
('Scoot', 'Singapur', 'TR', 'TGW', 'https://www.flyscoot.com/', 'Aerolínea de bajo costo de Singapur, filial de Singapore Airlines, que opera vuelos de media y larga distancia.'),
('Jetstar Airways', 'Australia', 'JQ', 'JST', 'https://www.jetstar.com/', 'Aerolínea de bajo costo australiana, parte del Grupo Qantas, con una red en Asia y el Pacífico.'),
('Fiji Airways', 'Fiyi', 'FJ', 'FJI', 'https://www.fijiairways.com/', 'La aerolínea de bandera de Fiyi, un actor clave en la conexión de las islas del Pacífico con el resto del mundo.'),
('Hawaiian Airlines', 'Estados Unidos', 'HA', 'HAL', 'https://www.hawaiianairlines.com/', 'La aerolínea más grande de Hawái, con vuelos entre las islas y a destinos en EE. UU., Asia y el Pacífico.'),
('Allegiant Air', 'Estados Unidos', 'G4', 'AAY', 'https://www.allegiantair.com/', 'Aerolínea de ultra bajo costo de EE. UU., enfocada en rutas de ocio a ciudades más pequeñas.'),
('Frontier Airlines', 'Estados Unidos', 'F9', 'FFT', 'https://www.flyfrontier.com/', 'Aerolínea de bajo costo de EE. UU., conocida por sus tarifas económicas y su enfoque en el ocio.'),
('Spirit Airlines', 'Estados Unidos', 'NK', 'NKS', 'https://www.spirit.com/', 'Aerolínea de ultra bajo costo de EE. UU., que ofrece tarifas muy bajas con servicios adicionales a la carta.'),
('Sun Country Airlines', 'Estados Unidos', 'SY', 'SCX', 'https://www.suncountry.com/', 'Aerolínea estadounidense que combina vuelos de pasajeros programados con servicios de chárter.'),
('Porter Airlines', 'Canadá', 'PD', 'POE', 'https://www.flyporter.com/', 'Aerolínea regional canadiense que opera principalmente desde el Aeropuerto Billy Bishop de Toronto.'),
('Air Transat', 'Canadá', 'TS', 'TSC', 'https://www.airtransat.com/', 'Aerolínea canadiense especializada en vuelos chárter y de ocio, principalmente a destinos vacacionales.'),
('Aeromexico Connect', 'México', '2K', 'SLI', 'https://www.aeromexicoconnect.com/', 'Filial regional de Aeroméxico, que opera vuelos nacionales y regionales.'),
('Viva Aerobus', 'México', 'VB', 'VIV', 'https://www.vivaaerobus.com/', 'Aerolínea de bajo costo mexicana, con una creciente red doméstica e internacional.'),
('Volaris', 'México', 'Y4', 'VOI', 'https://www.volaris.com/', 'Una de las principales aerolíneas de bajo costo de México, con vuelos en México, Estados Unidos y Centroamérica.'),
('JetSMART', 'Chile', 'JA', 'JAT', 'https://jetsmart.com/', 'Aerolínea de ultra bajo costo sudamericana, con operaciones en Chile, Argentina y otros países de la región.'),
('Sky Airline', 'Chile', 'H2', 'SKU', 'https://www.skyairline.com/', 'Aerolínea chilena que opera vuelos de bajo costo dentro de Chile y a algunos destinos sudamericanos.'),
('Gol Transportes Aéreos', 'Brasil', 'G3', 'GLO', 'https://www.voegol.com.br/', 'Aerolínea brasileña de bajo costo, con una extensa red doméstica y algunas rutas internacionales.'),
('Passaredo Linhas Aéreas', 'Brasil', '2Z', 'PTB', 'https://www.voepass.com.br/', 'Aerolínea regional brasileña, que opera vuelos en el interior de Brasil.'),
('Aerolineas Plus', 'Argentina', 'D4', 'PUL', 'N/A', 'Aerolínea regional argentina que opera vuelos domésticos.'),
('Flybondi', 'Argentina', 'FO', 'FBO', 'https://flybondi.com/', 'Aerolínea de ultra bajo costo argentina, la primera de su tipo en el país.'),
('Air Dolomiti', 'Italia', 'EN', 'DLA', 'https://www.airdolomiti.eu/', 'Aerolínea regional italiana, parte del Grupo Lufthansa, que conecta el norte de Italia con Alemania.'),
('Eurowings', 'Alemania', 'EW', 'EWG', 'https://www.eurowings.com/', 'Aerolínea de bajo costo del Grupo Lufthansa, que opera una extensa red de vuelos europeos.'),
('Condor', 'Alemania', 'DE', 'CFG', 'https://www.condor.com/', 'Aerolínea alemana de ocio, especializada en vuelos vacacionales de larga y corta distancia.'),
('TUIfly', 'Alemania', 'X3', 'TUI', 'https://www.tuifly.com/', 'Aerolínea alemana, parte del grupo TUI, enfocada en destinos vacacionales.'),
('Vueling Airlines', 'España', 'VY', 'VLG', 'https://www.vueling.com/', 'Aerolínea de bajo costo española, con una fuerte presencia en aeropuertos europeos.'),
('Level', 'España', 'IB', 'IBE', 'https://www.flylevel.com/', 'Marca de bajo costo y larga distancia de IAG, que opera vuelos transatlánticos desde Barcelona y París.'),
('Blue Air', 'Rumanía', '0B', 'BMS', 'https://www.blueairweb.com/', 'Aerolínea de bajo costo rumana, que opera vuelos a varios destinos europeos.'),
('TAROM', 'Rumanía', 'RO', 'ROT', 'https://www.tarom.ro/', 'La aerolínea de bandera de Rumanía, con rutas europeas y de Oriente Medio.'),
('Aegean Airlines', 'Grecia', 'A3', 'AEE', 'https://en.aegeanair.com/', 'La aerolínea más grande de Grecia, con una extensa red de destinos en Europa y Oriente Medio.'),
('Olympic Air', 'Grecia', 'OA', 'OAL', 'https://www.olympicair.com/', 'Aerolínea regional griega, filial de Aegean Airlines, que opera vuelos domésticos e islas griegas.'),
('Cyprus Airways', 'Chipre', 'CY', 'CYP', 'https://www.cyprusairways.com/', 'La aerolínea de bandera de Chipre, con vuelos a Europa y Oriente Medio.'),
('Air Malta', 'Malta', 'KM', 'AMC', 'https://www.airmalta.com/', 'La aerolínea de bandera de Malta, conecta el archipiélago con varias ciudades europeas.'),
('Croatia Airlines', 'Croacia', 'OU', 'CTN', 'https://www.croatiaairlines.com/', 'La aerolínea de bandera de Croacia, con vuelos a Europa y destinos domésticos.'),
('Adria Airways', 'Eslovenia', 'JP', 'ADR', 'N/A', 'Antigua aerolínea de bandera de Eslovenia (cesó operaciones en 2019).'),
('Montenegro Airlines', 'Montenegro', 'YM', 'MGX', 'N/A', 'Antigua aerolínea de bandera de Montenegro (cesó operaciones en 2020).'),
('Air Serbia', 'Serbia', 'JU', 'ASL', 'https://www.airserbia.com/', 'La aerolínea de bandera de Serbia, con una red que incluye Europa, Oriente Medio y América del Norte.'),
('Bulgaria Air', 'Bulgaria', 'FB', 'LZB', 'https://www.air.bg/', 'La aerolínea de bandera de Bulgaria, con vuelos a destinos europeos y de Oriente Medio.'),
('Uzbekistan Airways', 'Uzbekistán', 'HY', 'UZB', 'https://www.uzairways.com/', 'La aerolínea de bandera de Uzbekistán, con una red que se extiende por Asia, Europa y América del Norte.'),
('Air Astana', 'Kazajistán', 'KC', 'KZR', 'https://www.airastana.com/', 'La aerolínea de bandera de Kazajistán, conocida por su moderno servicio y su expansión internacional.'),
('Azerbaijan Airlines', 'Azerbaiyán', 'J2', 'AHY', 'https://www.azal.az/', 'La aerolínea de bandera de Azerbaiyán, con rutas a Europa, Asia y América.'),
('Georgia Airways', 'Georgia', 'A9', 'TGZ', 'https://www.georgian-airways.com/', 'La aerolínea de bandera de Georgia, opera vuelos regionales e internacionales.'),
('SCAT Airlines', 'Kazajistán', 'DV', 'VSV', 'https://www.scat.kz/', 'Aerolínea kazaja de bajo costo, con un enfoque en rutas domésticas y de la CEI.'),
('Air Mauritius', 'Mauricio', 'MK', 'MAU', 'https://www.airmauritius.com/', 'La aerolínea de bandera de Mauricio, con vuelos a destinos en África, Asia, Europa y Australia.'),
('Kenya Airways', 'Kenia', 'KQ', 'KQA', 'https://www.kenya-airways.com/', 'La aerolínea de bandera de Kenia, un importante hub en África oriental.'),
('RwandAir', 'Ruanda', 'WB', 'RWD', 'https://www.rwandair.com/', 'La aerolínea de bandera de Ruanda, con una creciente red en África y más allá.'),
('Tunisair', 'Túnez', 'TU', 'TAR', 'https://www.tunisair.com/', 'La aerolínea de bandera de Túnez, que conecta el país con Europa, Oriente Medio y África.'),
('Royal Brunei Airlines', 'Brunéi', 'BI', 'RBA', 'https://www.flyroyalbrunei.com/', 'La aerolínea de bandera de Brunéi, con rutas a Asia, Australia, Oriente Medio y Europa.'),
('Vietnam Airlines', 'Vietnam', 'VN', 'HVN', 'https://www.vietnamairlines.com/', 'La aerolínea de bandera de Vietnam, con una red en Asia, Europa y Australia.'),
('Cambodia Angkor Air', 'Camboya', 'K6', 'KHV', 'https://www.cambodiaangkorair.com/', 'La aerolínea de bandera de Camboya, enfocada en destinos nacionales y regionales.'),
('Myanmar Airways International', 'Birmania', '8M', 'MMA', 'https://www.maiair.com/', 'Aerolínea internacional de Myanmar, con vuelos a Asia.'),
('Biman Bangladesh Airlines', 'Bangladés', 'BG', 'BBC', 'https://www.biman-airlines.com/', 'La aerolínea de bandera de Bangladés, con rutas a Oriente Medio, Asia y Europa.'),
('SriLankan Airlines', 'Sri Lanka', 'UL', 'ALK', 'https://www.srilankan.com/', 'La aerolínea de bandera de Sri Lanka, con un fuerte enfoque en el subcontinente indio y Asia.'),
('Nepal Airlines', 'Nepal', 'RA', 'RNA', 'https://www.nepalairlines.com.np/', 'La aerolínea de bandera de Nepal, con vuelos a la India y algunos destinos asiáticos.'),
('Pakistan International Airlines', 'Pakistán', 'PK', 'PIA', 'https://www.piac.com.pk/', 'La aerolínea de bandera de Pakistán, con vuelos nacionales e internacionales.'),
('Afghanistan Airlines', 'Afganistán', 'FG', 'AFG', 'https://www.flyafghanistan.com/', 'La aerolínea de bandera de Afganistán, con vuelos limitados a destinos regionales.'),
('Iran Air', 'Irán', 'IR', 'IRA', 'https://www.iranair.com/', 'La aerolínea de bandera de Irán, con vuelos domésticos e internacionales.'),
('Mahan Air', 'Irán', 'W5', 'IRM', 'https://www.mahan.aero/', 'Aerolínea privada iraní, con una creciente red internacional.'),
('China Airlines', 'Taiwán', 'CI', 'CAL', 'https://www.china-airlines.com/', 'La aerolínea de bandera de Taiwán, con una extensa red en Asia, Norteamérica, Europa y Oceanía.'),
('Starlux Airlines', 'Taiwán', 'JX', 'SJX', 'https://www.starlux-airlines.com/', 'Una aerolínea taiwanesa de lujo más reciente, enfocada en vuelos premium.'),
('Korean Air Cargo', 'Corea del Sur', 'KE', 'KAL', 'https://cargo.koreanair.com/', 'La división de carga de Korean Air, una de las más grandes del mundo.'),
('Asiana Cargo', 'Corea del Sur', 'OZ', 'AAR', 'https://www.asianacargo.com/', 'La división de carga de Asiana Airlines.'),
('Cargolux', 'Luxemburgo', 'CV', 'CLX', 'https://www.cargolux.com/', 'Una de las principales aerolíneas de carga de Europa.'),
('ANA Cargo', 'Japón', 'NH', 'ANA', 'https://www.anacargo.jp/', 'La división de carga de ANA All Nippon Airways.'),
('JAL Cargo', 'Japón', 'JL', 'JAL', 'https://www.jal.co.jp/jalcargo/index.html', 'La división de carga de Japan Airlines.'),
('Polar Air Cargo', 'Estados Unidos', 'PO', 'PAC', 'https://www.polaraircargo.com/', 'Aerolínea de carga con base en EE. UU., parte del grupo Atlas Air Worldwide.'),
('Atlas Air', 'Estados Unidos', '5Y', 'GTW', 'https://www.atlasair.com/', 'Una de las aerolíneas de carga chárter más grandes del mundo.'),
('FedEx Express', 'Estados Unidos', 'FX', 'FDX', 'https://www.fedex.com/en-us/shipping/transportation/air-cargo.html', 'La aerolínea de carga más grande del mundo por volumen de carga.'),
('UPS Airlines', 'Estados Unidos', '5X', 'UPS', 'https://www.ups.com/us/en/supplychain/freight/air-cargo.html', 'La segunda aerolínea de carga más grande del mundo.'),
('DHL Aviation', 'Alemania', 'OE', 'DHL', 'https://www.dhl.com/global-en/home/our-divisions/express/features/air-freight.html', 'División de carga aérea de DHL, con una vasta red global.'),
('Luxair', 'Luxemburgo', 'LG', 'LGL', 'https://www.luxair.lu/', 'La aerolínea de bandera de Luxemburgo, con vuelos regionales y de ocio.'),
('CityJet', 'Irlanda', 'WX', 'CIL', 'https://www.cityjet.com/', 'Aerolínea regional irlandesa, que opera vuelos chárter y ACMI para otras aerolíneas.'),
('Loganair', 'Reino Unido', 'LM', 'LOG', 'https://www.loganair.co.uk/', 'Aerolínea regional escocesa, la más antigua del Reino Unido, que sirve a comunidades remotas.'),
('Aurigny', 'Guernsey', 'GR', 'AUR', 'https://www.aurigny.com/', 'La aerolínea de bandera de Guernsey, que conecta las Islas del Canal con el Reino Unido y Francia.'),
('Blue Islands', 'Jersey', 'SI', 'BCI', 'https://www.blueislands.com/', 'Aerolínea regional de las Islas del Canal, que ofrece vuelos a Reino Unido.'),
('Binter Canarias', 'España', 'NT', 'IBB', 'https://www.bintercanarias.com/', 'Aerolínea regional española con base en las Islas Canarias, especializada en vuelos interinsulares.'),
('Volotea', 'España', 'V7', 'VOE', 'https://www.volotea.com/', 'Aerolínea de bajo costo española, enfocada en conexiones entre ciudades europeas medianas y pequeñas.'),
('Air Baltic', 'Letonia', 'BT', 'BTI', 'https://www.airbaltic.com/', 'La aerolínea de bandera de Letonia, con un enfoque en conectar los países bálticos con Europa.'),
('Estonian Air', 'Estonia', 'OV', 'ELL', 'N/A', 'Antigua aerolínea de bandera de Estonia (cesó operaciones en 2015).'),
('Lithuanian Airlines', 'Lituania', 'TE', 'LIL', 'N/A', 'Antigua aerolínea de bandera de Lituania (cesó operaciones en 2005).'),
('LOT Polish Airlines', 'Polonia', 'LO', 'LOT', 'https://www.lot.com/', 'La aerolínea de bandera de Polonia, que sirve a destinos en Europa, Norteamérica y Asia.'),
('Smartwings', 'República Checa', 'QS', 'TVS', 'https://www.smartwings.com/', 'La aerolínea de ocio más grande de la República Checa, con vuelos chárter y regulares.'),
('CSA Czech Airlines', 'República Checa', 'OK', 'CSA', 'https://www.csa.cz/', 'La aerolínea de bandera de la República Checa, una de las aerolíneas más antiguas del mundo.'),
('Tarom', 'Rumanía', 'RO', 'ROT', 'https://www.tarom.ro/', 'La aerolínea de bandera de Rumanía, con rutas europeas y de Oriente Medio.'),
('Blue Air', 'Rumanía', '0B', 'BMS', 'https://www.blueairweb.com/', 'Aerolínea de bajo costo rumana, que opera vuelos a varios destinos europeos.'),
('Air Greenland', 'Groenlandia', 'GL', 'GRL', 'https://www.airgreenland.com/', 'La aerolínea de bandera de Groenlandia, que conecta el territorio con Dinamarca y dentro de Groenlandia.'),
('Icelandair', 'Islandia', 'FI', 'ICE', 'https://www.icelandair.com/', 'La aerolínea de bandera de Islandia, conocida por sus vuelos transatlánticos con escala en Reikiavik.'),
('Play', 'Islandia', 'OG', 'FLY', 'https://flyplay.com/', 'Aerolínea de bajo costo islandesa, que ofrece vuelos a Europa y Norteamérica.'),
('Faroe Islands Atlantic Airways', 'Islas Feroe', 'RC', 'FAE', 'https://www.atlantic.fo/', 'La aerolínea de bandera de las Islas Feroe, que conecta las islas con Dinamarca y otros destinos.'),
('Air Malta', 'Malta', 'KM', 'AMC', 'https://www.airmalta.com/', 'La aerolínea de bandera de Malta, conecta el archipiélago con varias ciudades europeas.')
");