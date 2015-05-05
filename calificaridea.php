<?php
require ('configs/include.php');
 
class c_calificaridea extends super_controller{
	
	public function calificar()
	{
		echo $this->post->calificacion;
		$cal=$this->post->calificacion;
		$ide=$this->post->idea;
		echo $ide;
		$calificacion=new calificacion($this->post);
		$idea=new idea($this->post);
		$_SESSION['datocal']=$cal;
		$_SESSION['datoide']=$ide;
		if($cal==NULL)
		{throw_exception("Ingrese una calificacion");}
		ELSE IF($ide=="Seleccione idea")
		{throw_exception("Seleccione una idea");}
		    $options['calificacion']['lvl2'] = "normal";
			$this->orm->connect();
			$this->orm->insert_data("normal",$calificacion);
			$option['idea']['lvl2'] = "normal";
			$this->orm->update_data("normal",$idea);
			$this->orm->close();
			 
			$this->type_warning = "sucess";
			$this->msg_warning = "Idea Calificada correctamente";
			 
			$this->temp_aux = 'message.tpl';
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
		
		
	}
	
	
	public function display()
	{
		$options['idea']['lvl2']="reunion";
		$this->orm->connect();
		$this->orm->read_data(array("idea"),$options);
		$idea=$this->orm->get_objects("idea");
		$this->orm->close();
		
		$this->engine->assign('idea',$idea);
		$this->engine->assign('title','Realizar calificacion');
		$this->engine->display($this->temp_aux);
		$this->engine->display('calificaridea.tpl');
	}
	
	public function run()
	{
		try {if(isset($this->get->option)) {$this->{$this->get->option}();}}
		catch (Exception $e)
		{
			$this->error=1; $this->msg_warning=$e->getMessage();
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
			$this->temp_aux='message.tpl';
		}
		$this->display();
	}
}

$call =new c_calificaridea();
$call->run();
?>