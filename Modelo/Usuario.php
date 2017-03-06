<?php  
		/**
		 * 
		 * @author Samuel Vara
		 */
		require_once 'UsuarioPDO.php';

		class Usuario{
			/**
			 * @AttributeType string
			 */
			private $codigo;
			/**
			 * @ttributeType string
			 */
			private $descripcion;
			/**
			 *
			 * @attributeType string
			 */
			private $password;
			/**
			 * @AttributeType string
			 */
			private $perfil;


			  /**
			     * 
			     * @param string $codigo Devuelve el codigo del usuario
			   */
			public function getCodigo() {
				return $this->codigo; 
			}
			  /**
			     * 
			     * @param string $descripcion Devuelve la Descripcion del usuario
			     */
			public function getDescripcion() {
				return $this->descripcion; 
			} 
			  /**
			     * 
			     * @param string $password Devuelve el Password del usuario
			     */
			public function getPassword() {
				return $this->password; 
			} 
			  /**
			     * 
			     * @param string $perfil  Devuelve el Perfil del usuario
			     */
			public function getPerfil() {
				return $this->perfil; 
			} 

			    /**
			     * Usuario constructor.
			     * @param string $codigo Codigo del usuario
			     * @param string $descripcion Descripcion del usuario
			     * @param string $password Password del usuario
			     * @param string $perfil Perfil del usuario
			     */
			public function __construct($codigo, $descripcion, $password, $perfil){

				$this->codigo = $codigo;
	            $this->descripcion = $descripcion;
	            $this->password =  $password;
	            $this->perfil = $perfil;
			}


			    /**
			     *
			     * Destructor de usuario
			     * 
			     * 
			     *
			     */
			public function __destruct(){
				$this->codigo ;
				$this->descripcion;
				$this->password;
				$this->perfil;
			}


			    /**
			     * Valida el usuario
			     * @param  string $codigo
			     * @param  string $descripcion
			     * @return object Usuario
			     *
			     */
			
			public static function validarUsuario($codigo,$password){

				$objUser = null;
		        $arrayUsuario = UsuarioPDO::validarUsuario($codigo, $password);//Llama al metodo validar de UsuarioPDO

		        if ($arrayUsuario) {//Si hay un array de usuario
		            $objUser = new Usuario($codigo, $arrayUsuario['descripcion'], $password, $arrayUsuario['perfil']);//Mete los campos del array en un objeto
		        }
		        return $objUser;//Devuelve el objeto de usuario
			}
		}

	?>





