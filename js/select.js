( function ( $, rwmb ) {
	'use strict';

	function transformSuccess( event, data ) {
		// No select.
		const $select = $( event.target ).find( '.rwmb-select' );
		if ( $select.length === 0 ) {
			return;
		}

		// No data.
		if ( data.items.length === 0 ) {
			return;
		}

		const selected = $select.attr( 'data-selected' );

		$select.find( 'option[value!=""]' ).remove();

		$.each( data.items, function ( index, option ) {
			$select.append( $( '<option>', {
				value: option.value,
				text: option.label
			} ) );
		} );

		$select.val( selected );
	};

	function toggleAll( e ) {
		e.preventDefault();

		var $this = $( this ),
			$select = $this.parent().siblings( 'select' );

		if ( 'none' === $this.data( 'type' ) ) {
			$select.val( [] ).trigger( 'change' );
			return;
		}
		var selected = [];
		$select.find( 'option' ).each( function ( index, option ) {
			selected.push( option.value );
		} );
		$select.val( selected ).trigger( 'change' );
	};

	rwmb.$document
		.on( 'click', '.rwmb-select-all-none a', toggleAll )
		.on( 'transformSuccess', transformSuccess );
} )( jQuery, rwmb );
