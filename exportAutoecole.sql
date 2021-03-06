USE [AutoEcole]
GO
/****** Object:  User [SEE\ACISZEK1]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\ACISZEK1] FOR LOGIN [SEE\ACISZEK1] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\AFREUND3]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\AFREUND3] FOR LOGIN [SEE\AFREUND3] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\ATRABACH]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\ATRABACH] FOR LOGIN [SEE\ATRABACH] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\LDIETMANN]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\LDIETMANN] FOR LOGIN [SEE\LDIETMANN] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\LOSTERMANN]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\LOSTERMANN] FOR LOGIN [SEE\LOSTERMANN] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\MBALLAY1]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\MBALLAY1] FOR LOGIN [SEE\MBALLAY1] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\MGOEPP]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\MGOEPP] FOR LOGIN [SEE\MGOEPP] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\MHUGEL1]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\MHUGEL1] FOR LOGIN [SEE\MHUGEL1] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\PGASSER2]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\PGASSER2] FOR LOGIN [SEE\PGASSER2] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\SDACOSTATORK]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\SDACOSTATORK] FOR LOGIN [SEE\SDACOSTATORK] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\VBOEGLIN2]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\VBOEGLIN2] FOR LOGIN [SEE\VBOEGLIN2] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [SEE\YGASHI1]    Script Date: 27/05/2021 16:03:10 ******/
CREATE USER [SEE\YGASHI1] FOR LOGIN [SEE\YGASHI1] WITH DEFAULT_SCHEMA=[dbo]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\ACISZEK1]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\ACISZEK1]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\ACISZEK1]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\AFREUND3]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\AFREUND3]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\AFREUND3]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\ATRABACH]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\ATRABACH]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\ATRABACH]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\LDIETMANN]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\LDIETMANN]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\LDIETMANN]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\LOSTERMANN]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\LOSTERMANN]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\LOSTERMANN]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\MBALLAY1]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\MBALLAY1]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\MBALLAY1]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\MGOEPP]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\MGOEPP]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\MGOEPP]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\MHUGEL1]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\MHUGEL1]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\MHUGEL1]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\PGASSER2]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\PGASSER2]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\PGASSER2]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\SDACOSTATORK]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\SDACOSTATORK]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\SDACOSTATORK]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\VBOEGLIN2]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\VBOEGLIN2]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\VBOEGLIN2]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [SEE\YGASHI1]
GO
ALTER ROLE [db_datareader] ADD MEMBER [SEE\YGASHI1]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [SEE\YGASHI1]
GO
/****** Object:  StoredProcedure [dbo].[pEleve_INSERT]    Script Date: 27/05/2021 16:03:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[pEleve_INSERT] 
	-- Add the parameters for the stored procedure here
	@nom nvarchar(30),@prenom nvarchar(25),@fateInscription smallDateTime,
	@adresse nvarchar(60), @cp nvarchar(5), @ville nvarchar(30),
	@creditHoraire smallint
	AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;
	
	Declare @code smallint
	SELECT @code = (SELECT max(id) FROM ELEVE)
	SELECT @code = @code + 1
	INSERT ELEVE
	VALUES (@code, @nom,@prenom,@fateInscription,@adresse, @cp, @ville, @creditHoraire)
END  

GO
/****** Object:  StoredProcedure [dbo].[pLecon_INSERT]    Script Date: 27/05/2021 16:03:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[pLecon_INSERT]
	@dateLecon smallDateTime
	,@idEleve smallint
	,@heure smallint
	,@duree smallint
	,@effectuee bit
	,@numImma nvarchar(8)
	AS
BEGIN
	Declare @numero smallint
	SELECT @numero = (select max(id) from lecon)
	select @numero = @numero + 1

	INSERT lecon (id
				  ,dateLecon
				  , idEleve
				  ,heureLecon
				  ,duree
				  ,effectuee
				  ,NumImmat)
	VALUES ( @numero
		     ,@dateLecon
			 ,@idEleve
			 ,@heure
			 ,@duree
			 ,@effectuee
			 ,@numImma)
	END

GO
/****** Object:  Table [dbo].[Eleve]    Script Date: 27/05/2021 16:03:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Eleve](
	[id] [smallint] NOT NULL,
	[NomEleve] [nvarchar](30) NULL,
	[PrenomEleve] [nvarchar](25) NULL,
	[DateInscription] [datetime] NULL,
	[AdresseRue] [nvarchar](60) NULL,
	[CP] [nvarchar](5) NULL,
	[Ville] [nvarchar](30) NULL,
	[CreditHoraire] [smallint] NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Lecon]    Script Date: 27/05/2021 16:03:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Lecon](
	[id] [smallint] NOT NULL,
	[DateLecon] [datetime] NULL,
	[Duree] [smallint] NULL,
	[HeureLecon] [smallint] NULL,
	[Effectuee] [bit] NOT NULL,
	[idEleve] [smallint] NULL,
	[NumImmat] [nvarchar](8) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Vehicule]    Script Date: 27/05/2021 16:03:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Vehicule](
	[NumImmat] [nvarchar](8) NULL,
	[Modele] [nvarchar](30) NULL,
	[Couleur] [nvarchar](20) NULL
) ON [PRIMARY]

GO
